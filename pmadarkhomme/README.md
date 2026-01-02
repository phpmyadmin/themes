# phpMyAdmin Dark Home Theme (pmadarkhomme)

A dark mode variant of the default phpMyAdmin theme (pmahomme), featuring a comfortable dark color scheme optimized for reduced eye strain during extended database administration sessions.

## Theme Details

- **Name**: pmadarkhomme
- **Version**: 5.0
- **Based On**: pmahomme (Default phpMyAdmin Theme)
- **Supports**: phpMyAdmin 5.0, 5.1, 5.2

## Color Scheme

This theme uses a carefully selected dark color palette:

### Background Colors
- **Main Background**: `#1a1a1a` - Deep charcoal
- **Navigation Panel**: `#1e1e1e` - Slightly lighter charcoal
- **Cards/Panels**: `#252525` - Medium dark gray
- **Table Rows (Alternate)**: `#2d2d2d` - Lighter gray stripes

### Text Colors
- **Primary Text**: `#d0d0d0` - Light gray
- **Headings**: `#e0e0e0` - Brighter light gray
- **Navigation Text**: `#e0e0e0` - High contrast for readability

### Accent Colors
- **Links**: `#5dade2` - Bright blue (high contrast)
- **Link Hover**: `#85c1e9` - Lighter blue
- **Browse Pointer**: `#2d5016` - Dark green background
- **Browse Marker**: `#8b5a00` - Dark orange background

### Form Elements
- **Input Background**: `#2d2d2d` - Medium gray
- **Input Border**: `#555` - Medium-dark border
- **Input Text**: `#e0e0e0` - Bright text for readability

## Key Features

1. **Reduced Eye Strain**: Dark backgrounds reduce screen brightness
2. **High Contrast**: Text and interactive elements maintain excellent readability
3. **Consistent Color Scheme**: All UI elements follow the same dark palette
4. **Professional Appearance**: Modern, sleek dark interface

## Development

### File Structure
```
pmadarkhomme/
├── theme.json              # Theme metadata
├── scss/                   # Source SCSS files
│   ├── _variables.scss     # Color definitions & theme variables
│   ├── _common.scss        # Common styles
│   ├── _reboot.scss        # Base element overrides
│   ├── theme.scss          # Main entry point
│   └── [other partials]    # Additional component styles
├── css/                    # Compiled CSS (generated)
│   ├── theme.css
│   └── theme.rtl.css
└── jquery/                 # jQuery UI theme overrides
```

### Building the Theme

After modifying SCSS files, compile to CSS:

```bash
# From project root
npm run css-compile

# Or # Or compile just this theme
npx sass themes/pmadarkhomme/scss:themes/pmadarkhomme/css --style=compressed
```

### Customizing Colors

To customize the theme colors, edit `scss/_variables.scss`:

```scss
// Example: Change the navigation background
$navi-background: #1e1e1e;  // Your custom color

// Example: Change link colors
$link-color: #5dade2;        // Your custom color
```

After changes, run `npm run css-compile` to regenerate CSS files.

## Installation & Activation

1. **Already Included**: Theme is in `themes/pmadarkhomme/` directory
2. **Compile CSS**: Run `npm run css-compile` or `yarn css-compile`
3. **Activate Theme**:
   - Login to phpMyAdmin
   - Go to Settings → Appearance
   - Select "pmadarkhomme" from theme dropdown
   - Click "Apply" to save

Or set as default in `config.inc.php`:
```php
$cfg['ThemeDefault'] = 'pmadarkhomme';
```

## Browser Compatibility

Supports all modern browsers:
- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Opera 76+

## Contributing

To improve this theme:

1. Edit SCSS files in `themes/pmadarkhomme/scss/`
2. Test changes by compiling CSS
3. Ensure contrast ratios meet accessibility guidelines (WCAG AA)
4. Submit pull request with clear description of changes

## License

GPL-2.0-only - Same as phpMyAdmin core

## Credits

Based on the original **pmahomme** theme by the phpMyAdmin developers.
Dark mode adaptation created to provide a modern, eye-friendly interface option.
