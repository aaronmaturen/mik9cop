# K9 Hero Guardians WordPress Theme

A professional WordPress theme for K9 Hero Guardians (formerly Saginaw Valley Police Canine Association) with complete Docker development environment.

## Features

- 🎨 **Professional Design** - Modern, responsive layout with K9-themed styling
- 🏠 **Editable Homepage** - Content managed through WordPress pages (no code needed!)
- 📅 **Events Calendar** - Integrated with The Events Calendar plugin
- 📸 **Widget-Based Sidebar** - Easy to add photo galleries, carousels, text, and donation info
- 🎠 **Photo Carousel** - MetaSlider integration for rotating K9 photos
- 📱 **Mobile Responsive** - Looks great on all devices
- 🐳 **Docker Setup** - Complete local development environment
- 🎯 **User-Friendly** - Non-technical users can edit all content

## Table of Contents

- [Quick Start](#quick-start)
- [Initial WordPress Setup](#initial-wordpress-setup)
- [Theme Configuration](#theme-configuration)
  - [1. Activate the Theme](#1-activate-the-theme)
  - [2. Set Up Your Homepage](#2-set-up-your-homepage)
  - [3. Create Additional Pages](#3-create-additional-pages)
  - [4. Configure the Homepage Sidebar](#4-configure-the-homepage-sidebar)
  - [5. Add Your Logo](#5-add-your-logo)
  - [6. Set Up Navigation Menu](#6-set-up-navigation-menu)
  - [7. Install and Configure Events Calendar](#7-install-and-configure-events-calendar)
  - [8. Install MetaSlider for Photo Carousel](#8-install-metaslider-for-photo-carousel)
  - [9. Update Social Media Links](#9-update-social-media-links)
- [Development](#development)
- [Troubleshooting](#troubleshooting)

## Prerequisites

- **Docker Desktop** - [Download here](https://www.docker.com/products/docker-desktop)
- **Git** (optional) - For version control

## Quick Start

1. **Clone or download this repository:**
   ```bash
   cd /path/to/your/projects
   git clone <your-repo-url> mik9cop
   cd mik9cop
   ```

2. **Start Docker containers:**
   ```bash
   docker-compose up -d
   ```

3. **Wait for initialization** (30-60 seconds for database to be ready)

4. **Access your site:**
   - WordPress site: http://localhost:8080
   - WordPress Admin: http://localhost:8080/wp-admin
   - PHPMyAdmin: http://localhost:8081

---

## Initial WordPress Setup

When you first visit http://localhost:8080, WordPress will ask you to complete installation:

1. **Select Language:** English
2. **Fill in Site Information:**
   - Site Title: `K9 Hero Guardians`
   - Username: Choose admin username (save this!)
   - Password: Create strong password (save this!)
   - Email: Your email address
   - Check "Discourage search engines" (for development)
3. **Click "Install WordPress"**
4. **Log in** with your credentials

---

## Theme Configuration

Follow these steps in order to fully set up your site.

### 1. Activate the Theme

**After WordPress installation:**

1. Go to **Appearance > Themes**
2. Find "K9 Hero Guardians" theme
3. Click **Activate**
4. Visit your homepage - you'll see setup instructions

### 2. Set Up Your Homepage

The homepage content is editable through WordPress (no coding required!).

**Create Your Homepage:**

1. Go to **Pages > Add New**
2. **Title:** `Home`
3. **Add Content:**
   - Use the block editor to add paragraphs, images, etc.
   - Copy existing content or write new content
   - Example content:
     ```
     Welcome to K9 Hero Guardians, formerly known as the Saginaw Valley Police Canine Association (SVPCA)!

     K9 Hero Guardians provides assistance to law enforcement agencies by covering the costs for the dog, training, medical expenses, dog food, equipment, car inserts, carriers, leads, harnesses, heat alarms and other costs related to the K9 unit.

     We also provide funding for veterinary care for our retired K9's. K9 Hero Guardians does not cover wages, overtime or benefits.

     K9 Hero Guardians is funded by private and corporate donations, grants and various fundraising events. All donations are tax-deductible.

     Follow us on Facebook to stay up-to-date with the daily activities of the K9's and K9 Hero Guardians!
     ```
4. **Optional:** Add a Featured Image (appears at top of page)
   - Click "Set featured image" in right sidebar
   - Upload a hero image
5. Click **Publish**

**Set as Homepage:**

1. Go to **Settings > Reading**
2. Under "Your homepage displays", select **"A static page"**
3. For "Homepage:", select **Home**
4. Click **Save Changes**

**Result:** Your homepage is now editable! Go to Pages > All Pages > Edit "Home" anytime to update content.

### 3. Create Additional Pages

Create these pages for your site navigation:

#### Events Page

1. Go to **Pages > Add New**
2. **Title:** `Events`
3. In the **right sidebar**, under "Template", select **"Events Page"**
4. **Content:** Add introductory text (optional)
   ```
   Check out our upcoming K9 events, demonstrations, and training sessions.
   ```
5. Click **Publish**

**Note:** Events will display once you install The Events Calendar plugin (see step 7)

#### Fundraising Page

1. Go to **Pages > Add New**
2. **Title:** `Fundraising`
3. **Content:** Add information about fundraising:
   - Upcoming fundraising events
   - How donations are used
   - Sponsorship opportunities
   - Success stories
4. **Optional:** Add images of past events
5. Click **Publish**

#### About Page (Optional but Recommended)

1. Go to **Pages > Add New**
2. **Title:** `About`
3. **Content:** Add information about:
   - History of K9 Hero Guardians
   - Mission and vision
   - Board members or leadership
   - How the organization started
4. **Optional:** Add team photos
5. Click **Publish**

### 4. Configure the Homepage Sidebar

The sidebar on your homepage can display photo galleries, donation info, and more.

**Add Widgets to Sidebar:**

1. Go to **Appearance > Widgets**
2. Find **"Homepage Sidebar"** in the list
3. Add widgets by dragging from left to right:

#### Option A: Single Featured Photo

1. Drag **Image** widget to Homepage Sidebar
2. Click **Add Image**
3. Upload your K9 officer photo (or use existing from theme/assets/images/k9.jpg)
4. Add alt text: `K9 Officer with Police Dog`
5. **Save**

#### Option B: Photo Gallery

1. Drag **Gallery** widget to Homepage Sidebar
2. Click **Create Gallery**
3. Upload multiple K9 photos (5-10 photos work well)
4. Click **Create a new gallery**
5. Arrange photos by dragging
6. Click **Insert gallery**
7. **Save**

#### Add Donation Information

1. Drag **Text** widget to Homepage Sidebar (below image/gallery)
2. **Title:** `How to Support the Police K9's`
3. **Content:**
   ```
   Donations may be mailed to:

   K9 Hero Guardians
   3381 Sterling Road
   Omer, MI 48749

   You may also make donations <a href="https://app.autobooks.co/pay/saginaw-valley-police-canine-association" target="_blank">online</a>.

   Another way to support the police K9's is by shopping our <a href="https://k9-hero-guardians.square.site/" target="_blank">online store</a>.
   ```
4. **Save**

**Tip:** Add as many widgets as you need. They display top-to-bottom in the order you arrange them.

#### Add Photo Carousel/Slider (Optional)

For a rotating photo carousel in your sidebar, use MetaSlider:

**Install MetaSlider:**

1. Go to **Plugins > Add New**
2. Search: `MetaSlider`
3. Click **Install Now** on "MetaSlider" by MetaSlider
4. Click **Activate**

**Create Your K9 Photo Slider:**

1. Go to **MetaSlider > Add New** in WordPress Admin
2. **Title:** Name your slider (e.g., "K9 Photos")
3. **Add Slides:**
   - Click **+ Add Slide**
   - Upload 5-10 K9 photos (or select from Media Library)
   - For each photo, add a caption (optional)
4. **Configure Settings:**
   - **Width:** 600px (or leave auto)
   - **Height:** 400px (or leave auto)
   - **Effect:** Slide or Fade
   - **Arrow:** Show arrows (optional)
   - **Navigation:** Show dots (recommended)
   - **Auto play:** Yes (recommended)
   - **Speed:** 3000ms (3 seconds)
5. Click **Save & Preview**
6. **Copy the shortcode** (looks like `[metaslider id="123"]`)

**Add Slider to Homepage Sidebar:**

1. Go to **Appearance > Widgets**
2. Drag **Text** widget to "Homepage Sidebar"
3. **Title:** Leave blank or add title like "Our K9 Heroes"
4. In the content area, click the **Text** tab (not Visual!)
5. **Paste the shortcode** (e.g., `[metaslider id="123"]`)
6. Click **Save**
7. Visit your homepage to see the slider!

**Result:** Your K9 photos will automatically rotate in the sidebar.

**Alternative:** Use the built-in Gallery widget (step 4B above) if you prefer a static grid without animation.

### 5. Add Your Logo

The theme includes a default dark-themed logo with the thin blue line. To use your own logo:

1. Go to **Appearance > Customize**
2. Click **Site Identity**
3. Click **Select Logo**
4. **Upload** your logo image
5. **Recommended size:** 400-600px wide, optimized for dark backgrounds
6. Click **Select** then **Publish**

**Default Logo:** The theme uses `theme/assets/images/dark-logo.png` by default, which features the K9 Hero Guardians branding with a thin blue line accent.

**Result:** Logo appears in header across all pages

### 6. Set Up Navigation Menu

Create your site navigation menu:

1. Go to **Appearance > Menus**
2. Click **create a new menu**
3. **Menu Name:** `Main Menu`
4. Click **Create Menu**

**Add Pages to Menu:**

1. On the left, under "Pages", check boxes for:
   - ☑ Home
   - ☑ Events
   - ☑ Fundraising
   - ☑ About (if created)
2. Click **Add to Menu**
3. **Drag to reorder** (they'll appear in this order)

**Add External Links (Store & Donate):**

1. On the left, click **Custom Links** to expand

2. **Add Store Link:**
   - **URL:** `https://k9-hero-guardians.square.site/`
   - **Link Text:** `Store`
   - Click **Add to Menu**
   - Drag the "Store" link to desired position (recommend placing after "Events")
   - Click the arrow on "Store" link to expand settings
   - Check **"Open link in a new tab"**

3. **Add Donate Link:**
   - **URL:** `https://app.autobooks.co/pay/saginaw-valley-police-canine-association`
   - **Link Text:** `Donate`
   - Click **Add to Menu**
   - Drag the "Donate" link to desired position (recommend placing after "Store")
   - Click the arrow on "Donate" link to expand settings
   - Check **"Open link in a new tab"**

**Finalize:**

1. Under "Menu Settings", check **Primary Menu**
2. Click **Save Menu**

**Result:** Navigation appears in header on all pages, with Store and Donate links opening in new tabs

**Note:** The theme includes default navigation with Home, Events, Store, and Donate links if no custom menu is set.

### 7. Install and Configure Events Calendar

The theme includes a custom dark theme for The Events Calendar plugin that automatically matches your site design.

**Install the Plugin:**

1. Go to **Plugins > Add New**
2. Search: `The Events Calendar`
3. Find "The Events Calendar" by The Events Calendar Team
4. Click **Install Now**
5. Click **Activate**

**Configure Settings:**

1. Go to **Events > Settings**
2. **Events URL slug:** Keep as `events` (matches your navigation)
3. **Date Format:** Choose your preference
4. **Time Format:** Choose your preference
5. Click **Save Changes**

**Create Your First Event:**

1. Go to **Events > Add New**
2. **Title:** Name of your event
3. **Description:** Add event details
4. **Event Date/Time:** Set start and end date/time
5. **Venue:** Add location (optional)
6. **Featured Image:** Upload event photo (optional)
7. Click **Publish**

**Result:** Events display at http://localhost:8080/events/

**Theme Integration:** The calendar automatically displays with:
- Dark backgrounds matching the site theme
- Blue accent colors for buttons and links
- Gold hover states
- Professional styling consistent with the rest of the site
- No additional configuration needed!

### 8. Install MetaSlider for Photo Carousel

To add a rotating photo carousel to your homepage sidebar, install MetaSlider (free plugin):

**Install the Plugin:**

1. Go to **Plugins > Add New**
2. Search: `MetaSlider`
3. Find "MetaSlider" by MetaSlider
4. Click **Install Now**
5. Click **Activate**

**Create Your First Slider:**

1. Go to **MetaSlider > Add New** (new menu item in WordPress Admin)
2. **Slideshow title:** `K9 Photos` (or any name you prefer)
3. **Add Slides:**
   - Click the blue **+ Add Slide** button
   - Upload K9 photos from your computer (or select from Media Library)
   - Add 5-10 photos for best results
   - You can add captions to each slide (optional)
4. **Configure Slider Settings** (in right sidebar):
   - **Width:** 600 (automatically fits sidebar)
   - **Height:** 400 (or leave blank for auto)
   - **Effect:** Choose "Slide" or "Fade"
   - **Arrows:** Check to show navigation arrows
   - **Navigation:** Select "Dots" (recommended)
   - **Auto play:** Check this box
   - **Animation speed:** 700ms (default is good)
   - **Slide delay:** 3000ms (3 seconds between slides)
5. Click **Save**
6. **Copy the shortcode** displayed at top (looks like `[metaslider id="123"]`)

**Add to Homepage Sidebar:**

1. Go to **Appearance > Widgets**
2. Find "Homepage Sidebar" widget area
3. Drag a **Text** widget into it
4. **Title:** Leave blank or add "Our K9 Heroes" or "Photo Gallery"
5. **Important:** Click the **Text** tab (NOT the Visual tab!)
6. Paste your shortcode: `[metaslider id="123"]`
7. Click **Save**

**View Your Slider:**

1. Visit your homepage: http://localhost:8080
2. The photo carousel will appear in the sidebar
3. Photos will automatically rotate every 3 seconds

**Tips:**
- You can create multiple sliders for different purposes
- Edit slider anytime at **MetaSlider > [Your Slider Name]**
- Reorder slides by dragging them
- The free version is perfect for basic photo carousels

### 9. Customize Footer Content (Optional)

The footer displays default content but can be fully customized using widgets:

**To Edit Footer Content:**

1. Go to **Appearance > Widgets**
2. Find **"Footer Column 1"** and **"Footer Column 2"**
3. Add **Text** widgets to customize each column:

**Footer Column 1 - About Section:**
- Drag a **Text** widget to "Footer Column 1"
- **Title:** `About K9 Hero Guardians`
- **Content:** Add your about text
- To add social media icons, add HTML:
  ```html
  <div class="social-links">
    <a href="https://www.facebook.com/SVPCA" target="_blank" rel="noopener" aria-label="Facebook">
      <span>f</span>
    </a>
  </div>
  ```

**Footer Column 2 - Contact Section:**
- Drag a **Text** widget to "Footer Column 2"
- **Title:** `Contact`
- **Content:**
  ```
  K9 Hero Guardians
  3381 Sterling Road
  Omer, MI 48749

  info@k9heroguardians.org
  ```

**Note:** If you don't add widgets, the footer shows default content automatically.

---

## Development

### For Developers

The theme folder is mounted as a Docker volume, so changes to files update immediately.

### Theme File Structure

```
theme/
├── assets/
│   ├── css/         # Additional stylesheets
│   ├── js/          # JavaScript files
│   └── images/      # Theme images (includes dark-logo.png)
├── inc/             # PHP includes
│   ├── template-tags.php      # Custom template tags
│   └── template-functions.php # Template functions
├── template-parts/  # Reusable template parts
│   ├── content.php
│   ├── content-single.php
│   ├── content-page.php
│   └── content-none.php
├── style.css                    # Main stylesheet & theme info
├── tribe-events-dark-theme.css  # Events Calendar dark theme override
├── functions.php                # Theme functions
├── index.php                    # Main template
├── header.php                   # Header template
├── footer.php                   # Footer template
├── sidebar.php                  # Sidebar template
├── single.php                   # Single post template
└── page.php                     # Page template
```

### The Events Calendar Dark Theme

The theme includes `tribe-events-dark-theme.css` which automatically styles The Events Calendar plugin to match the dark professional theme. This file:

- Overrides The Events Calendar's CSS variables (using `--tec-` prefix)
- Uses proper CSS specificity following their BEM conventions
- Loads after the plugin's styles via dependency management
- Requires no additional configuration
- Won't conflict with plugin updates

**To customize Events Calendar colors**, edit the CSS variables at the top of `tribe-events-dark-theme.css`.

### Making Changes

The theme folder is mounted as a volume in Docker, so any changes you make to files in the `theme/` directory will be immediately reflected in WordPress.

1. Edit files in the `theme/` directory
2. Refresh your browser to see changes
3. CSS changes are in `theme/style.css`
4. JavaScript changes are in `theme/assets/js/main.js`

### Database Access

Access PHPMyAdmin at http://localhost:8081

- Server: db
- Username: wordpress
- Password: wordpress
- Database: wordpress

## Docker Commands

```bash
# Start containers
docker-compose up -d

# Stop containers
docker-compose down

# View logs
docker-compose logs

# Restart containers
docker-compose restart

# Remove containers and volumes (CAUTION: deletes all data)
docker-compose down -v
```

## Theme Customization

### Adding Your Logo

The theme is designed to display the K9 Hero Guardians logo at the top of every page. To add your logo:

1. Go to WordPress Admin: http://localhost:8080/wp-admin
2. Navigate to **Appearance > Customize**
3. Click on **Site Identity**
4. Click **Select Logo** and upload your logo image
5. Recommended logo size: 600px wide (height will scale automatically)
6. Click **Publish** to save

Your logo will now appear at the top of all pages across the site!

### Creating and Managing Pages

The theme is designed for easy content management through WordPress.

#### Setting Up Your Homepage (IMPORTANT!)

The homepage is set up to use WordPress page content for easy editing:

1. **Create a Home Page:**
   - Go to **Pages > Add New** in WordPress Admin
   - Title: "Home"
   - Add your homepage content using the WordPress editor
   - You can use the Block Editor to add text, images, buttons, etc.
   - **Optional**: Set a Featured Image (this will appear at the top of the content)
   - Click **Publish**

2. **Set it as Your Homepage:**
   - Go to **Settings > Reading**
   - Under "Your homepage displays", select **"A static page"**
   - For "Homepage", select your "Home" page
   - Click **Save Changes**

3. **Editing Homepage Content:**
   - Go to **Pages > All Pages**
   - Click "Edit" on your "Home" page
   - Make your changes
   - Click **Update**
   - Changes appear immediately on the live site!

#### Creating Additional Pages

1. Go to **Pages > Add New**
2. Create pages for:
   - **Fundraising** - Information about fundraising events and opportunities
   - **Events Calendar** - Upcoming events (use the Events Page template)
   - **About** - More information about K9 Hero Guardians
   - Any other pages you need

3. After creating pages, add them to your navigation menu (see Navigation Menu section below)

### Recommended Plugins

#### Contact Form
Install **Contact Form 7** for a robust contact form:
1. Go to **Plugins > Add New**
2. Search for "Contact Form 7"
3. Click **Install Now**, then **Activate**
4. The theme is already styled for Contact Form 7

#### Events Calendar (Already Integrated!)
The theme includes custom templates for **The Events Calendar** plugin:
1. Go to **Plugins > Add New**
2. Search for "The Events Calendar"
3. Click **Install Now**, then **Activate**
4. Go to **Events > Settings** to configure
5. Start adding events at **Events > Add New**

The theme includes:
- Custom calendar archive template styled to match the K9 Hero Guardians design
- Single event template with enhanced display of event details
- Styling that integrates with your blue color scheme
- Responsive event displays

To view your events calendar, go to: http://localhost:8080/events/

Alternative options if you prefer:
- **Event Organiser** - Another popular free events plugin
- **Modern Events Calendar** - Feature-rich with multiple views

#### Image Carousel/Slider (MetaSlider - Recommended!)
For rotating K9 photos in your homepage sidebar:

**MetaSlider (FREE)** - Recommended for this theme
- Easy to use, no coding required
- Works perfectly in sidebar widgets
- Multiple transition effects
- See Step 8 in Theme Configuration for complete setup guide

Alternative options:
- **Smart Slider 3** - More advanced features, steeper learning curve
- **Slider Revolution** - Premium plugin with complex animations

### Customizing Colors

The theme uses K9 Hero Guardians colors (blue and black - "thin blue line" scheme). To customize:

Edit the CSS variables in `theme/style.css`:

```css
:root {
  --primary-color: #2851A3;     /* Blue (used for headings) */
  --secondary-color: #1a3a6b;   /* Darker blue */
  --text-color: #333;           /* Text color */
  --background-color: #fff;     /* Background */
  --link-color: #d32f2f;        /* Link color */
}
```

### Uploading the K9 Officer Image

To add the police K9 image shown in the sidebar:

1. Upload your K9 officer image to the media library
2. Save it at: `theme/assets/images/k9-officer.jpg`
3. Or update the path in `theme/front-page.php` line 67

### Navigation Menu

To add a navigation menu (currently hidden on front page, but available for other pages):

1. Go to **Appearance > Menus**
2. Create a new menu
3. Add your pages to the menu
4. Assign it to "Primary Menu" location

## Troubleshooting

### Containers won't start
```bash
# Check if ports are in use
docker-compose down
docker-compose up -d
```

### Can't access WordPress
- Verify containers are running: `docker-compose ps`
- Check logs: `docker-compose logs wordpress`
- Ensure ports 8080 and 8081 are not in use by other applications

### Database connection issues
```bash
# Restart all containers
docker-compose restart
```

### WordPress shows "Error establishing database connection"
- Wait 30-60 seconds after starting containers for MySQL to fully initialize
- Check that all containers are running: `docker-compose ps`
- View database logs: `docker-compose logs db`

### Changes not appearing
- Clear browser cache (Cmd+Shift+R on Mac, Ctrl+Shift+R on Windows)
- Check that you saved changes in WordPress
- For theme file changes, refresh the page

### Widgets not showing
- Make sure you're adding widgets to "Homepage Sidebar" (not "Sidebar")
- Check Appearance > Widgets to verify widgets are in the correct area

### Events page is blank
- Install and activate "The Events Calendar" plugin
- Create at least one event
- Visit http://localhost:8080/events/

### Reset everything
```bash
# WARNING: This will delete all WordPress data
docker-compose down -v
docker-compose up -d
```

---

## Additional Documentation

- **SETUP-GUIDE.md** - Non-technical guide for content editors
- **WIDGETS-GUIDE.md** - Detailed guide for customizing the homepage sidebar

## Quick Reference

| Task | Location |
|------|----------|
| Edit homepage | Pages > All Pages > Edit "Home" |
| Add events | Events > Add New |
| Edit sidebar | Appearance > Widgets > Homepage Sidebar |
| Create photo slider | MetaSlider > Add New |
| Change logo | Appearance > Customize > Site Identity |
| Edit menu | Appearance > Menus |
| Upload images | Media > Add New |
| Install plugins | Plugins > Add New |
| View database | http://localhost:8081 |

## Production Deployment

When ready to deploy to production:

1. **Export content:**
   - Go to Tools > Export in WordPress Admin
   - Save the XML file

2. **Set up production server** with WordPress

3. **Copy theme files:**
   - Upload entire `theme/` folder to production server's themes directory

4. **Import content:**
   - Tools > Import in production WordPress
   - Upload the XML file

5. **Install plugins:**
   - The Events Calendar
   - MetaSlider (for photo carousel)
   - Contact Form 7 (optional)

6. **Configure settings:**
   - Set homepage to "Home" page
   - Assign menus
   - Upload logo
   - Add widgets to Homepage Sidebar

7. **Security:**
   - Change admin username/password
   - Update database credentials
   - Set `WORDPRESS_DEBUG` to `0`
   - Install security plugins
   - Set up SSL certificate
   - Configure regular backups

## Support

- **For content editors:** See SETUP-GUIDE.md and WIDGETS-GUIDE.md
- **For developers:** Review this README and theme files
- **Issues:** Open an issue on the GitHub repository

## License

This theme is licensed under the GNU General Public License v2 or later.

---

**Made with ❤️ for K9 Hero Guardians**
