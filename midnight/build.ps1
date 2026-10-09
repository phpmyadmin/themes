param(
  [switch]$SkipRtl
)

$ErrorActionPreference = 'Stop'

# This script lives inside <phpmyadmin>/themes/<folder>.
# Paths are derived from its own location, so renames/moves keep working.
$here   = $PSScriptRoot
$root   = Split-Path (Split-Path $here -Parent) -Parent   # phpMyAdmin root
$folder = Split-Path $here -Leaf                          # theme folder name
$theme  = "themes/$folder"
$css    = Join-Path $here 'css'

# The SCSS imports phpMyAdmin's shared Bootstrap sources (../../bootstrap/scss).
if (-not (Test-Path (Join-Path $root 'themes\bootstrap\scss'))) {
  throw "Shared Bootstrap SCSS not found at $root\themes\bootstrap\scss. Run this script from inside a phpMyAdmin checkout: <phpmyadmin>/themes/$folder/build.ps1"
}

Push-Location $root
try {
  Write-Output '== 1/4 sass (compressed) =='
  npx sass "${theme}/scss:${theme}/css" --style=compressed
  if ($LASTEXITCODE -ne 0) { throw "sass failed: $LASTEXITCODE" }

  Write-Output '== 2/4 autoprefixer =='
  npx postcss "$theme/css/theme.css" --use autoprefixer --replace
  if ($LASTEXITCODE -ne 0) { throw "postcss failed: $LASTEXITCODE" }

  Write-Output '== 3/4 strip sourcesContent from inline map =='
  $strip = @'
const fs = require('fs');
const p = process.argv[2];
let t = fs.readFileSync(p, 'utf8');
const k = t.lastIndexOf('base64,');
if (k < 0) { console.error('no inline map'); process.exit(2); }
const start = k + 7;
const end = t.indexOf(' */', start);
if (end < 0) { console.error('unterminated inline map'); process.exit(3); }
const obj = JSON.parse(Buffer.from(t.slice(start, end), 'base64').toString('utf8'));
delete obj.sourcesContent;
const nb = Buffer.from(JSON.stringify(obj), 'utf8').toString('base64');
fs.writeFileSync(p, t.slice(0, start) + nb + t.slice(end));
console.log('map json -> ' + JSON.stringify(obj).length + ' bytes (sourcesContent removed)');
'@
  $stripPath = Join-Path $env:TEMP 'pma-strip-map.js'
  Set-Content -Path $stripPath -Value $strip -Encoding ASCII
  node $stripPath "$css\theme.css"
  if ($LASTEXITCODE -ne 0) { throw "map strip failed: $LASTEXITCODE" }

  if (-not $SkipRtl) {
    Write-Output '== 4/4 rtlcss =='
    $rtlCfg = Join-Path $root '.rtlcssrc.json'
    if (Test-Path $rtlCfg) {
      npx rtlcss -c $rtlCfg "$theme/css/theme.css" "$theme/css/theme.rtl.css"
    } else {
      npx rtlcss "$theme/css/theme.css" "$theme/css/theme.rtl.css"
    }
    if ($LASTEXITCODE -ne 0) { throw "rtlcss failed: $LASTEXITCODE" }
  }
}
finally {
  Pop-Location
}

Write-Output '== output =='
Get-ChildItem $css -Filter 'theme*.css*' | Select-Object Name, Length, LastWriteTime | Format-Table -AutoSize
