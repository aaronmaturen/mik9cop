# Homepage Sidebar Widget Guide

The homepage sidebar is now fully customizable through WordPress widgets! This means your content editors can easily add and rearrange content without touching any code.

## How to Access

1. Log into WordPress Admin
2. Go to **Appearance > Widgets**
3. Find **"Homepage Sidebar"** in the list

## Recommended Widgets to Add

### 1. Gallery Widget (For K9 Photos)

**Perfect for:** Showcasing multiple K9 photos in a grid

**How to add:**
1. Drag "Gallery" widget to "Homepage Sidebar"
2. Click "Create Gallery"
3. Upload or select multiple K9 photos
4. Click "Create a new gallery"
5. Arrange photos by dragging
6. Click "Insert gallery"
7. Save the widget

**Tip:** The gallery will automatically display in a nice grid layout with hover effects!

### 2. Image Widget (For Single Featured Photo)

**Perfect for:** Displaying the main K9 officer photo

**How to add:**
1. Drag "Image" widget to "Homepage Sidebar"
2. Click "Add Image"
3. Upload or select your K9 photo
4. Add alt text (e.g., "K9 Officer with Police Dog")
5. Save the widget

### 3. Text Widget (For Donation Information)

**Perfect for:** Donation details, contact info, custom text

**How to add:**
1. Drag "Text" widget to "Homepage Sidebar"
2. Add a title (e.g., "How to Support the Police K9's")
3. In the content area, add your text:

```
Donations may be mailed to:

K9 Hero Guardians
3381 Sterling Road
Omer, MI 48749

You may also make donations <a href="https://app.autobooks.co/pay/saginaw-valley-police-canine-association" target="_blank">online</a>.

Another way to support the police K9's is by shopping our <a href="https://k9-hero-guardians.square.site/" target="_blank">online store</a>.
```

4. Save the widget

**Tip:** You can use the "Visual" tab for easier formatting!

### 4. Custom HTML Widget (For Advanced Content)

**Perfect for:** Buttons, custom layouts, embedded content

**How to add:**
1. Drag "Custom HTML" widget to "Homepage Sidebar"
2. Add your HTML code
3. Save the widget

**Example - Donation Button:**
```html
<div style="text-align: center; margin: 20px 0;">
  <a href="your-donation-link" class="btn btn-accent" style="display: inline-block;">
    Donate Now
  </a>
</div>
```

## Widget Order

Widgets display from top to bottom in the order you place them. To reorder:
1. Drag widgets up or down in the "Homepage Sidebar" area
2. They automatically save when you move them

## Example Setup

Here's a recommended widget arrangement:

1. **Image Widget** - Featured K9 photo at the top
2. **Gallery Widget** - Grid of K9 action photos
3. **Text Widget** - Donation information
4. **Text Widget** - Contact information

## Tips for Content Editors

- **Preview changes:** Open your homepage in another tab and refresh after saving widgets
- **Remove a widget:** Click the widget, then click "Delete"
- **Collapse widgets:** Click the arrow on the widget title to minimize it
- **Multiple text widgets:** You can add as many text widgets as you want for different sections

## For Carousel/Slider (Recommended: MetaSlider)

If you want rotating K9 photos instead of a static gallery, use **MetaSlider** (free plugin):

### Install MetaSlider

1. Go to **Plugins > Add New**
2. Search: `MetaSlider`
3. Click **Install Now** on "MetaSlider" by MetaSlider
4. Click **Activate**

### Create Your K9 Photo Slider

1. Go to **MetaSlider > Add New** in WordPress Admin
2. **Slideshow title:** `K9 Photos`
3. Click **+ Add Slide** and upload 5-10 K9 photos
4. **Settings** (in right sidebar):
   - Width: 600
   - Height: 400 (or auto)
   - Effect: Slide or Fade
   - Arrows: On
   - Navigation: Dots
   - Auto play: Yes
   - Slide delay: 3000ms
5. Click **Save**
6. **Copy the shortcode** at the top (looks like `[metaslider id="123"]`)

### Add to Homepage Sidebar

1. Go to **Appearance > Widgets**
2. Drag **Text** widget to "Homepage Sidebar"
3. **Title:** `Our K9 Heroes` (optional)
4. **Important:** Click the **Text** tab (NOT Visual!)
5. Paste your shortcode: `[metaslider id="123"]`
6. Click **Save**

Your K9 photos will now rotate automatically on the homepage!

**Other slider options:**
- Smart Slider 3 (more advanced)
- Soliloquy (premium)

## Troubleshooting

**Q: My widgets aren't showing up**
A: Make sure you're adding widgets to "Homepage Sidebar" specifically, not "Sidebar" or "Footer"

**Q: Images are too large**
A: WordPress automatically resizes them. If still too large, edit the image in Media Library and choose "Edit Image" to resize

**Q: Can I use HTML?**
A: Yes! In Text widgets, switch to the "Text" tab to add HTML. Or use the "Custom HTML" widget.

**Q: How do I remove the yellow setup notice?**
A: It automatically disappears once you add at least one widget to the Homepage Sidebar

---

**Need more help?** Check out the main README.md or contact your technical team.
