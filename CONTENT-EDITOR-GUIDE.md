# Content Editor Guide - K9 Hero Guardians Website

This guide is for content editors who need to update text, images, events, and other content on the K9 Hero Guardians website. No coding knowledge required!

## Table of Contents
1. [Accessing the WordPress Dashboard](#accessing-the-wordpress-dashboard)
2. [Managing Pages](#managing-pages)
3. [Managing Events](#managing-events)
4. [Managing Slideshows (Photo Carousels)](#managing-slideshows-photo-carousels)
5. [Editing Homepage Sidebar Content](#editing-homepage-sidebar-content)
6. [Editing Footer Content](#editing-footer-content)
7. [Managing the Navigation Menu](#managing-the-navigation-menu)
8. [Uploading Images](#uploading-images)

---

## Accessing the WordPress Dashboard

1. Go to your website URL and add `/wp-admin` at the end
   - Example: `https://k9heroguardians.org/wp-admin`
2. Enter your username and password
3. You'll see the WordPress Dashboard - this is your control center!

---

## Managing Pages

### Finding Your Pages

1. In the left sidebar, click **Pages** → **All Pages**
2. You'll see a list of all your pages:
   - **Home** - Your homepage (front page)
   - **About** - Information about K9 Hero Guardians
   - **Contact** - Contact information and forms
   - Any other pages you've created

### Editing a Page

1. Hover over the page name and click **Edit**
2. Update the content in the editor
3. Click **Update** (blue button in the top right) to save your changes
4. Click **Preview** to see how it looks before publishing

### Creating a New Page

1. Click **Pages** → **Add New**
2. Enter a title for your page
3. Add your content using the block editor
4. Click **Publish** when ready

---

## Managing Events

The Events Calendar plugin powers your events page at `/events/`.

### Adding a New Event

1. In the left sidebar, click **Events** → **Add New**
2. Fill in the event details:
   - **Event Title**: Name of the event
   - **Event Description**: Add details about the event using the editor
   - **Event Date/Time**: Set when the event starts and ends
   - **Event Location**: Add venue information
3. Add a **Featured Image** (optional but recommended)
   - This image appears in the calendar and event listing
4. Click **Publish** to make the event live

### Editing an Existing Event

1. Click **Events** → **All Events**
2. Find your event and click **Edit**
3. Make your changes
4. Click **Update** to save

### Deleting or Canceling an Event

1. Click **Events** → **All Events**
2. Hover over the event name
3. Click **Trash** to delete it
4. Or edit it and add "CANCELED" to the title if you want to keep the record

### Event Calendar Settings

1. Click **Events** → **Settings**
2. Here you can customize:
   - Default view (Month, List, or Day)
   - Date and time formats
   - Events URL slug (default is `/events/`)

---

## Managing Slideshows (Photo Carousels)

The homepage sidebar displays a photo carousel using MetaSlider.

### Creating a New Slideshow

1. In the left sidebar, click **MetaSlider** → **Add New**
2. Give your slideshow a name (e.g., "K9 Training Photos")
3. Click **+ Add Slide** to add images:
   - Upload new images, or
   - Select from your Media Library
4. For each slide, you can add:
   - **Caption**: Text that appears on the image
   - **URL**: Make the image clickable (optional)
   - **Alt Text**: Description for accessibility
5. Configure slideshow settings:
   - **Effect**: Slide or Fade
   - **Speed**: How fast slides transition (3000-5000 is good)
   - **Auto play**: Turn on to automatically advance slides
6. Click **Save**
7. Copy the **Shortcode** (looks like `[metaslider id="123"]`)

### Adding Slideshow to Homepage

1. Go to **Appearance** → **Widgets**
2. Find **Homepage Sidebar** widget area
3. Add or edit a **Text** or **HTML** widget
4. Paste your slideshow shortcode
5. Click **Save**

### Editing an Existing Slideshow

1. Click **MetaSlider**
2. Find your slideshow and click on it
3. Add, remove, or reorder slides by dragging
4. Click **Save** when done

---

## Editing Homepage Sidebar Content

The sidebar on your homepage shows photo galleries, donation information, and important updates.

### Accessing Homepage Sidebar Widgets

1. Go to **Appearance** → **Widgets**
2. Find the **Homepage Sidebar** section
3. You'll see widgets you can edit or add

### Adding Content to the Sidebar

1. Click **Add a Widget** (the + button)
2. Choose a widget type:
   - **Text** or **HTML**: For custom text and HTML (like your slideshow shortcode)
   - **Image**: For a single image
   - **Custom HTML**: For donation buttons or embedded content
3. Add your content
4. Click **Save**

### Example: Adding Donation Information

1. Add a **Text** or **HTML** widget
2. Title: "Support Our K9 Heroes"
3. Content:
   ```html
   <p>Your donations help cover costs for K9 training, medical expenses, and equipment.</p>
   <a href="https://app.autobooks.co/pay/saginaw-valley-police-canine-association"
      target="_blank"
      rel="noopener"
      class="donate-link">
      Donate Now
   </a>
   ```
4. Click **Save**

### Reordering Sidebar Widgets

1. Drag and drop widgets to reorder them
2. Changes save automatically

---

## Editing Footer Content

The footer has two columns that you can customize.

### Accessing Footer Widgets

1. Go to **Appearance** → **Widgets**
2. Find **Footer Column 1** and **Footer Column 2**

### Footer Column 1 (About Section)

This typically contains information about K9 Hero Guardians and social media links.

1. Click on **Footer Column 1**
2. Add or edit a **Text** widget
3. Example content:
   ```
   Title: About K9 Hero Guardians

   Content:
   Providing assistance to law enforcement agencies by covering
   costs for K9 units, training, medical expenses, and equipment.

   Follow us on Facebook: https://www.facebook.com/SVPCA
   ```

### Footer Column 2 (Contact Section)

This typically contains contact information.

1. Click on **Footer Column 2**
2. Add or edit a **Text** or **HTML** widget
3. Example content:
   ```html
   <h3>Contact</h3>
   <strong>K9 Hero Guardians</strong><br>
   3381 Sterling Road<br>
   Omer, MI 48749<br><br>
   <a href="mailto:info@k9heroguardians.org">info@k9heroguardians.org</a>
   ```

---

## Managing the Navigation Menu

The navigation menu appears at the top of every page.

### Editing the Navigation Menu

1. Go to **Appearance** → **Menus**
2. Select your **Primary Menu** (or create one if it doesn't exist)
3. Add items to the menu:
   - **Pages**: Check boxes next to pages you want in the menu
   - **Custom Links**: Add external links (like Store or Donate)
   - **Events**: Add a link to your Events page

### Adding the Store Link

1. Click **Custom Links**
2. URL: `https://k9-hero-guardians.square.site/`
3. Link Text: `Store`
4. Click **Add to Menu**
5. Check **Open link in a new tab** in the link settings

### Adding the Donate Link

1. Click **Custom Links**
2. URL: `https://app.autobooks.co/pay/saginaw-valley-police-canine-association`
3. Link Text: `Donate`
4. Click **Add to Menu**
5. Check **Open link in a new tab**

### Reordering Menu Items

1. Drag and drop menu items to reorder
2. Click **Save Menu** when done

---

## Uploading Images

### Adding Images to Media Library

1. Go to **Media** → **Library**
2. Click **Add New**
3. Drag and drop images, or click **Select Files**
4. Images are now available to use anywhere on your site

### Best Practices for Images

- **File size**: Keep images under 1MB for faster loading
- **Dimensions**:
  - Homepage slideshow: 800-1200px wide
  - Featured images for events: 1200x628px
  - Logo/graphics: PNG format for transparency
- **File names**: Use descriptive names (e.g., `k9-training-march-2024.jpg`)
- **Alt text**: Always add descriptive alt text for accessibility

### Adding Alt Text to Images

1. Click on an image in the Media Library
2. In the right sidebar, find **Alt Text**
3. Add a brief description (e.g., "K9 officer training with handler")
4. Click **Update**

---

## Quick Reference

### Common Tasks

| Task | Location |
|------|----------|
| Edit homepage content | **Pages** → **All Pages** → **Home** |
| Add an event | **Events** → **Add New** |
| Edit slideshow | **MetaSlider** → Select slideshow |
| Edit sidebar | **Appearance** → **Widgets** → **Homepage Sidebar** |
| Edit footer | **Appearance** → **Widgets** → **Footer Column 1/2** |
| Edit navigation | **Appearance** → **Menus** |
| Upload images | **Media** → **Add New** |

---

## Need Help?

If you run into any issues or need assistance:

1. Check the WordPress documentation at https://wordpress.org/documentation/
2. For The Events Calendar, visit https://theeventscalendar.com/support/
3. For MetaSlider, visit https://www.metaslider.com/documentation/

---

## Tips for Content Editors

✅ **Always preview changes** before publishing
✅ **Save drafts frequently** to avoid losing work
✅ **Use meaningful page titles** for better SEO
✅ **Add alt text to all images** for accessibility
✅ **Keep event information up-to-date** - remove old events regularly
✅ **Test links** after adding them to make sure they work
✅ **Use consistent formatting** across all pages

---

**Version 1.0** - Created for K9 Hero Guardians
**Last Updated**: October 2024
