# SY Travel Desk - Travel Agency Website Specification

## 1. Project Overview

**Project Name:** SY Travel Desk - Travel Agency Website  
**Project Type:** Single-page responsive website  
**Core Functionality:** A premium travel agency website showcasing Indigo flight booking services and tour packages with a professional, modern design  
**Target Users:** Travelers in Raipur, Chhattisgarh looking for flight bookings and tour packages

---

## 2. UI/UX Specification

### Layout Structure

**Sections (Top to Bottom):**
1. **Navigation Bar** - Fixed top, transparent on scroll, brand logo + menu links
2. **Hero Section** - Full viewport height, background image with overlay, centered text
3. **About Section** - Two-column layout (text + image)
4. **Services Section** - Grid of service cards with hover effects
5. **Why Choose Us** - Feature highlights with icons
6. **Contact/Footer** - Contact info, quick links, social media

**Responsive Breakpoints:**
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

### Visual Design

**Color Palette:**
- Primary: `#0A2647` (Deep Navy Blue - trust, professionalism)
- Secondary: `#144272` (Medium Blue)
- Accent: `#F4A261` (Warm Orange - energy, travel)
- Accent Light: `#E9C46A` (Golden Yellow)
- Text Dark: `#1B1B1B`
- Text Light: `#FFFFFF`
- Background Light: `#F8F9FA`
- Background Alt: `#FFFFFF`

**Typography:**
- Headings: 'Playfair Display', serif (elegant, premium feel)
- Body: 'Poppins', sans-serif (modern, readable)
- Hero Headline: 3.5rem (desktop), 2rem (mobile)
- Section Headings: 2.5rem (desktop), 1.75rem (mobile)
- Body Text: 1rem
- Small Text: 0.875rem

**Spacing System:**
- Section Padding: 100px vertical (desktop), 60px (mobile)
- Container Max Width: 1200px
- Card Padding: 30px
- Element Margins: 20px standard

**Visual Effects:**
- Box shadows: `0 10px 40px rgba(0,0,0,0.1)`
- Border radius: 12px (cards), 8px (buttons)
- Gradient overlays on hero
- Smooth scroll behavior

### Components

**Navigation:**
- Logo (text-based: SY Travel Desk with plane icon)
- Menu items: Home, About, Services, Why Us, Contact
- CTA Button: "Book Now"
- Mobile: Hamburger menu

**Hero Section:**
- Full-screen background with parallax effect
- Animated headline with typewriter effect
- Sub-headline fade-in
- Dual CTA buttons
- Scroll indicator at bottom

**About Section:**
- Split layout with image on one side
- Floating cards with stats
- Animated counter numbers

**Services Cards:**
- Icon in colored circle
- Title and description
- Hover: lift effect + accent color border
- Services to include:
  1. Corporate Bookings
  2. 6E Add-ons (Priority Check-in, Seat Selection, Meal Pre-booking)
  3. Instant Support
  4. Domestic Tours
  5. International Tours
  6. Local Chhattisgarh Tours

**Why Choose Us:**
- Four feature boxes in grid
- Icons with title and description
- Subtle background pattern

**Footer:**
- Three columns: Contact Info, Quick Links, Services
- Social media icons
- Copyright bar

### Animations

- **Page Load:** Staggered fade-in for sections
- **Scroll:** Elements animate in when scrolled into view
- **Hero:** Headline type effect, buttons slide up
- **Cards:** Hover lift effect (transform: translateY)
- **Navigation:** Smooth background transition on scroll
- **Numbers:** Count-up animation for stats
- **Parallax:** Subtle background movement on scroll

---

## 3. Functionality Specification

### Core Features

1. **Responsive Navigation**
   - Fixed navbar that changes background on scroll
   - Smooth scroll to sections on click
   - Mobile hamburger menu with slide-in effect

2. **Hero Section**
   - Auto-playing background slideshow or video
   - Animated text reveal
   - Call-to-action buttons with hover effects

3. **About Section**
   - Animated statistics counters
   - Image with floating elements

4. **Services Showcase**
   - Interactive card grid
   - Filter/category tabs (optional)
   - Read more modals

5. **Contact Form** (Footer)
   - Display contact information
   - Email placeholder for integration

6. **Smooth Scrolling**
   - All anchor links scroll smoothly

### User Interactions

- Hover effects on all interactive elements
- Scroll-triggered animations
- Mobile touch-friendly targets (min 44px)
- Keyboard navigation support

### Edge Cases

- Graceful degradation if JavaScript disabled
- Fallback fonts if Google Fonts fail
- Placeholder images with proper alt text

---

## 4. Technical Requirements

- **Framework:** Bootstrap 5.3
- **Custom CSS:** Separate style block
- **jQuery:** For animations and interactions
- **External Libraries:**
  - Bootstrap Icons
  - AOS (Animate On Scroll) library
  - Owl Carousel (for testimonials/hero)
  - Counter-Up (for statistics)

---

## 5. Content Specification

### Hero Section
- **Headline:** "Your Gateway to Seamless Skies and Unforgettable Journeys."
- **Sub-headline:** "Experience the best of Indigo's efficiency paired with SY Travel Desk's personalized tour expertise. From quick business hops to dream vacations, we make every trip a 'SY Travel Desk.'"

### About Section
- Content as provided with emphasis on:
  - Location: Avanti Vihar, Raipur
  - Premium travel agency
  - Indigo partnership
  - Trust and comfort focus

### Services
**A. Specialized Indigo Ticketing:**
- Corporate Bookings
- 6E Add-ons (Priority Check-in, Seat Selection, Meal Pre-booking)
- Instant Support (Flight changes/cancellations)

**B. Bespoke Tour Packages:**
- Domestic Wonders (Rajasthan, Kerala, Himachal)
- International Escapes (Dubai, Thailand, Bali)
- Local Chhattisgarh Tours

### Why Choose Us
- Professional Expertise
- SEO-Optimized Planning
- Hyper-Local Presence
- Best Routes & Rates

### Contact Info
- Address: Infront of Car Arena, 1st Floor, Avanti Vihar, Raipur, Chhattisgarh - 492001
- Phone: +91 9407993413
- Email: sytraveldesk@gmail.com (placeholder)

---

## 6. Image Requirements

Since actual images are not provided, use high-quality placeholders:
- Hero: Travel/sky/airplane themed background
- About: Team or office image
- Services: Icon-based representation
- Destinations: Landscape photos

---

## 7. Acceptance Criteria

1. ✅ Page loads without errors
2. ✅ All sections visible and properly styled
3. ✅ Responsive on mobile, tablet, and desktop
4. ✅ Animations play smoothly
5. ✅ Navigation works correctly
6. ✅ Colors and typography match specification
7. ✅ All content from requirements is included
8. ✅ Code is clean and well-organized
9. ✅ Bootstrap properly integrated
10. ✅ jQuery animations functional
