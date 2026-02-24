# Gupta Skin & Dental Hospital – Admin Content Guide

Use this file to fill data in **WordPress Admin → Pages (Home, About) and Theme Settings (Header, Footer)**.  
Website focus: **98% skin**, **2% dental**; no relation between skin and dental sections.

**ACF tabs:** All ACF field groups are organised **section-wise in tabs** (e.g. Hero Section, About Section, FAQs, etc.). Use the tabs in the editor to jump to the section you want to edit.

**404 page content:** The 404 error page title, description, image and button are edited under **Theme Settings → 404 Page** tab (not on a separate page), so they work when any non-existent URL is opened.

---

## 1. DOCTOR PROFILE (Home + About Us page)

| ACF Field | Value to Enter |
|-----------|----------------|
| **doctor_section_title** | Consultant Dermatologist |
| **doctor_name** | Dr. Rahul Gupta |
| **doctor_qualification** | MBBS, SMS Medical College<br>M.D. (Skin & V.D.), SMS Medical College Jaipur |
| **doctor_experience** | Consultant Dermatologist & Director at Gupta Skin And Dental Hospital, Alwar, since 10 years |
| **doctor_publications** | 5 publications in National & International journals |
| **doctor_interest** | Acne, Melasma, Cosmetic dermatology, Clinical dermatology |
| **doctor_previous_role** | Ex M.O., Rajeev Gandhi General Hospital, Alwar |
| **doctor_image** | Upload: Dr. Rahul Gupta’s professional photo (or use existing Rahul-Gupta.webp) |

---

## 2. HERO SECTION (Home page)

| ACF Field | Value to Enter |
|-----------|----------------|
| **hero_section → hero_title** | Expert Skin Care for Healthy, Glowing Skin |
| **hero_section → hero_description** | At Gupta Skin And Dental Hospital, we provide comprehensive dermatology care—from acne and pigmentation to advanced cosmetic treatments. Trust our expertise for your skin’s health and beauty. |
| **hero_section → hero_button_text** | Book Appointment |
| **hero_section → hero_button_link** | /contact (or your contact/page URL) |
| **hero_section → hero_review_text** | I am very satisfied with the skin treatment and the doctor’s care. |
| **hero_section → hero_review_rating** | 5.0 |
| **hero_section → hero_review_image** | Optional: small review/trust image |
| **hero_section → hero_main_image** | Upload: Hospital exterior or welcoming skin-care visual (see Image Prompts below) |

---

## 3. HERO CTA BOX (3 items – Contact, Location, Timings)

| Item | cta_title | cta_content / cta_items |
|------|-----------|--------------------------|
| 1 | Contact Us | Use **cta_items**: one row – cta_label: "Phone", cta_value: Your clinic number, cta_link: tel:98XXXXXXXX |
| 2 | Our Location | Alwar address (e.g. full clinic address) |
| 3 | Working Hours | e.g. Monday–Friday: 4:00 PM – 8:00 PM (or as per your board) |

*Consultation fee (e.g. 150/-) can go in Contact page or a small notice; not mandatory in hero.*

---

## 4. ABOUT US SECTION (Home + About Us page)

| ACF Field | Value to Enter |
|-----------|----------------|
| **about_section → about_title** | about us |
| **about_section → about_heading** | Empowering Your Skin with Expert Care & Solutions |
| **about_section → about_description** | We are dedicated to helping you achieve and maintain healthy, beautiful skin. From medical dermatology to cosmetic treatments, our clinic offers personalised care tailored to you. |
| **about_section → about_list_items** | • Commitment to excellence in skin health<br>• Modern facility and advanced technology<br>• Trusted by thousands of satisfied patients |
| **about_section → about_button_text** | About more |
| **about_section → about_button_link** | /about (or About Us page URL) |
| **about_section → video_button_text** | Play video (optional) |
| **about_section → video_url** | Your YouTube/video URL (optional) |
| **about_section → team_member_count** | 1 (or your team count) |
| **about_section → team_member_label** | Expert dermatologist |
| **about_section → about_image_1** | Upload: Reception or indoor clinic (see Image Prompts) |
| **about_section → about_image_2** | Upload: Second about image (e.g. cabin or waiting area) |

---

## 5. ABOUT COUNTERS (4 items)

| counter_number | counter_suffix | counter_text |
|----------------|---------------|--------------|
| 96 | % | Patient satisfaction |
| 10 | + | Years of experience |
| 5000 | + | Happy patients |
| 1 | + | State-of-the-art skin clinic |

---

## 6. WHY CHOOSE US SECTION

| ACF Field | Value to Enter |
|-----------|----------------|
| **why_choose_section → why_choose_title** | Why choose us |
| **why_choose_section → why_choose_heading** | Why choose us for all your skin care needs |
| **why_choose_section → why_choose_description** | We are dedicated to helping you achieve healthy, radiant skin. From personalised treatment plans to advanced technology, we offer care tailored to you. |
| **why_choose_section → why_choose_image** | Upload: Clinic interior or doctor consultation (see Image Prompts) |

**why_choose_items** (at least 2):

| why_choose_item_title | why_choose_item_description |
|-----------------------|-----------------------------|
| Personalised, compassionate care | We take time to understand your skin concerns and tailor treatment plans for the best results. |
| Comprehensive skin solutions | From medical dermatology to cosmetic procedures, we offer a full range of services under one roof. |

---

## 7. OUR PROCESS SECTION

| ACF Field | Value to Enter |
|-----------|----------------|
| **our_process_section → process_subtitle** | Our process |
| **our_process_section → process_title** | Expert dermatology care for healthy, radiant skin |
| **our_process_section → process_description** | From consultation to follow-up, we guide you at every step. Our services are designed to support your skin health and goals. |
| **our_process_section → process_video_image** | Upload: Doctor’s cabin or procedure (see Image Prompts) |
| **our_process_section → process_video_url** | Your YouTube URL (optional) |
| **our_process_section → process_video_title** | Our process |
| **our_process_section → process_video_heading** | Watch our procedure |
| **process_list_items** (repeater) | Expert dermatologist • Personalised care • Advanced technology • Comprehensive services • Effective solutions • Comfortable environment |
| **our_process_section → process_button_text** | Learn more |
| **our_process_section → process_button_link** | /about |
| **our_process_section → process_footer_text** | Your skin’s transformation starts here – |
| **our_process_section → process_footer_link_text** | Book today! |
| **our_process_section → process_footer_link** | /contact |

---

## 8. HOW WE WORK SECTION

| ACF Field | Value to Enter |
|-----------|----------------|
| **how_we_work_section → how_work_subtitle** | How we work |
| **how_we_work_section → how_work_title** | A commitment to your skin health |
| **how_we_work_section → how_work_description** | We are dedicated to helping you achieve and maintain beautiful, healthy skin with personalised care at every step. |
| **how_we_work_section → how_work_image** | Upload: Consultation or clinic (see Image Prompts) |
| **how_we_work_section → how_work_contact_heading** | Have questions? We’re here to help! |
| **how_we_work_section → how_work_contact_phone** | Your clinic phone number |
| **how_we_work_section → how_work_contact_link** | tel:98XXXXXXXX |

**how_work_steps** (3 steps):

| step_number | step_title | step_description |
|-------------|------------|-------------------|
| 01 | Personalised consultation | We understand your skin concerns and goals to create a customised treatment plan. |
| 02 | Tailored treatment plans | Every plan is designed for your skin type and condition for the best results. |
| 03 | Continuous care & follow-up | We support you with follow-ups and advice for long-term skin health. |

---

## 9. OUR BENEFIT SECTION

| ACF Field | Value to Enter |
|-----------|----------------|
| **our_benefit_section → benefit_subtitle** | Our benefits |
| **our_benefit_section → benefit_title** | Exceptional dermatology, every step of the way |
| **our_benefit_section → benefit_description** | Personalised care, advanced treatments, and visible results with our expert dermatology services. |
| **our_benefit_section → benefit_image** | Upload: Treatment or result (see Image Prompts) |

**benefit_items** (6 items – 3 left, 1 center image, 3 right):

- **Left:** Expert dermatologists • Advanced technology • Personalised care  
- **Center:** Use benefit_image  
- **Right:** Comprehensive services • High safety standards • Comfortable environment  

*(Use existing labels/descriptions in admin or the default fallback text.)*

---

## 10. OUR RESULTS (Before & After)

| ACF Field | Value to Enter |
|-----------|----------------|
| **our_results_section → results_subtitle** | Our results |
| **our_results_section → results_title** | Before & after: see the difference |
| **our_results_section → results_description** | Real results from our dermatology treatments. (Use only with patient consent and blur if needed.) |

**transformation_images**: Add 2–4 before/after pairs (trans_image_before, trans_image_after). Use consent and anonymise where required.

---

## 11. FAQs SECTION

| ACF Field | Value to Enter |
|-----------|----------------|
| **faqs_section → faqs_subtitle** | Frequently asked questions |
| **faqs_section → faqs_title** | Common questions about skin care |
| **faqs_section → faqs_description** | Quick answers about our dermatology services and what to expect. |

**faq_items** (example 5):

| faq_question | faq_answer |
|--------------|------------|
| What skin conditions do you treat? | We treat acne, melasma, pigmentation, vitiligo, psoriasis, skin infections, hair fall, and offer cosmetic procedures like chemical peels, laser, PRP, and more. |
| Do I need a consultation before treatment? | Yes. A consultation helps us understand your skin and recommend the right treatment plan for you. |
| Are your treatments suitable for all skin types? | Yes. Our treatments are tailored to Indian skin types and we use USFDA-approved technology where applicable. |
| Do you offer cosmetic dermatology? | Yes. We offer procedures like HydraFacial, chemical peels, HIFU, laser hair removal, microneedling RF, PRP, and others. |
| What should I expect in my first visit? | You will have a detailed skin assessment, discussion of concerns, and a personalised treatment plan. |

---

## 12. TESTIMONIALS SECTION

| ACF Field | Value to Enter |
|-----------|----------------|
| **testimonials_section → testimonials_subtitle** | Testimonials |
| **testimonials_section → testimonials_title** | What our patients say |
| **testimonials_section → testimonials_description** | Real stories from patients who achieved healthier, glowing skin with us. |

**testimonial_items**: Add 2+ testimonials with testimonial_rating (1–5), testimonial_content, testimonial_author_name, testimonial_author_title, and optional testimonial_author_image.

### 4 ready-to-use testimonials (copy into repeater)

| # | testimonial_rating | testimonial_content | testimonial_author_name | testimonial_author_title |
|---|---------------------|---------------------|-------------------------|--------------------------|
| 1 | 5 | I had stubborn acne and pigmentation for years. Dr. Rahul Gupta explained the treatment clearly and within a few months my skin improved a lot. The clinic is clean and the staff is very supportive. I highly recommend Gupta Skin Hospital for any skin concern. | Priya Sharma | Homemaker, Alwar |
| 2 | 5 | I came for melasma treatment. The doctor suggested a combination of medication and procedures. The results were visible and lasting. Professional approach, no unnecessary treatments. Very satisfied and will continue follow-ups here. | Vikram Singh | Business Owner, Alwar |
| 3 | 5 | My son had severe acne and was very conscious. After consultation and a proper regime, his skin cleared up and his confidence is back. Grateful to the entire team for the care and follow-up. Definitely the best skin clinic in Alwar. | Neelam Yadav | Teacher, Alwar |
| 4 | 5 | I got laser hair removal and chemical peel done here. The process was painless and the staff made me comfortable. My skin looks brighter and the hair has reduced significantly. Clean facility and worth every rupee. | Anjali Mehta | Software Engineer, Alwar |

**Short copy-paste (one per testimonial):**

- **1.** Content: *I had stubborn acne and pigmentation for years. Dr. Rahul Gupta explained the treatment clearly and within a few months my skin improved a lot. The clinic is clean and the staff is very supportive. I highly recommend Gupta Skin Hospital for any skin concern.* — **Priya Sharma**, Homemaker, Alwar  
- **2.** Content: *I came for melasma treatment. The doctor suggested a combination of medication and procedures. The results were visible and lasting. Professional approach, no unnecessary treatments. Very satisfied and will continue follow-ups here.* — **Vikram Singh**, Business Owner, Alwar  
- **3.** Content: *My son had severe acne and was very conscious. After consultation and a proper regime, his skin cleared up and his confidence is back. Grateful to the entire team for the care and follow-up. Definitely the best skin clinic in Alwar.* — **Neelam Yadav**, Teacher, Alwar  
- **4.** Content: *I got laser hair removal and chemical peel done here. The process was painless and the staff made me comfortable. My skin looks brighter and the hair has reduced significantly. Clean facility and worth every rupee.* — **Anjali Mehta**, Software Engineer, Alwar  

---

## 13. FOOTER – BOOK APPOINTMENT (Footer Settings → Options)

| ACF Field | Value to Enter |
|-----------|----------------|
| **book_appointment_section → appointment_subtitle** | Book an appointment |
| **book_appointment_section → appointment_title** | Reach out to us today |
| **book_appointment_section → appointment_description** | Take control of your skin health. Book a convenient time and our team will be ready to help. |
| **book_appointment_section → location_address** | Your full clinic address, Alwar |
| **book_appointment_section → appointment_map_embed** | Google Map embed URL (iframe src) |
| **book_appointment_section → form_name_placeholder** | Full Name |
| **book_appointment_section → form_phone_placeholder** | Phone Number |
| **book_appointment_section → form_email_placeholder** | Email Address |
| **book_appointment_section → form_services_label** | Select service |
| **book_appointment_section → form_services** | E.g. Acne, Melasma, Pigmentation, Laser, PRP, Consultation, Other |
| **book_appointment_section → form_message_placeholder** | Describe your concern or service needed... |
| **book_appointment_section → appointment_button_text** | Send message |

**appointment_contacts** (repeater): Add phone number(s) with contact_icon (e.g. fa-solid fa-phone), contact_phone, contact_phone_link (tel:).

---

## 14. FOOTER – BRANDING & CONTACT (Footer Settings)

| ACF Field | Value to Enter |
|-----------|----------------|
| **footer_branding → footer_description** | Gupta Skin And Dental Hospital offers expert dermatology care in Alwar—from medical skin treatments to cosmetic procedures. Your skin’s health, our priority. |
| **footer_contact_cards** | Contact us: phone number(s), labels (e.g. “For appointments”) |
| **footer_get_in_touch → location_text** | Full clinic address |
| **footer_get_in_touch → email_label** | Email |
| **footer_get_in_touch → email_address** | Your clinic email |
| **footer_quick_links** | Home, About us, Contact, Gallery (with correct URLs) |
| **footer_social_title** | Follow us |
| **footer_social_links** | Facebook, Instagram, etc. (url, icon_class) |
| **footer_copyright_text** | © 2025 Gupta Skin And Dental Hospital. All rights reserved. |

---

## 15. SCROLLING TICKER (Footer Settings)

**scrolling_ticker** (repeater – ticker_text):  
E.g. “Expert Skin Care • Acne & Melasma • Laser & PRP • Cosmetic Dermatology • Alwar”

---

## 16. HEADER (Header Settings)

| ACF Field | Value to Enter |
|-----------|----------------|
| **header_logo → desktop_logo** | Upload clinic logo (or keep theme logo) |
| **navigation_menu** | Home, About us, Procedures/Services, Gallery, Contact (with correct links) |
| **header_cta → cta_label** | Book Appointment |
| **header_cta → cta_link** | /contact |

---

## 17. ABOUT US PAGE – EXTRA SECTIONS

| ACF Field | Value to Enter |
|-----------|----------------|
| **page_header_title** | About us |
| **procedures_subtitle** | Procedures & facilities |
| **procedures_title** | Procedures / Facilities Available |
| **procedures_description** | Complete range of dermatology and cosmetology procedures at our centre. |

**procedures_items** (from your list):  
HydraFacial • Excimer Laser & NBUVB Chamber • Chemical Peeling • HIFU (Ultracel Q+) • Diode Laser Hair Removal (Alma Soprano Ice Platinum) • Microneedling R.F. • Radiofrequency Ablation • PRP Therapy — each with procedure_title and procedure_points (or procedure_subtitle) as in your current fallback.

**mission_vision_section**: Subtitle, title, description.  
**mission_vision_items**: Mission, Vision (with mission_item_title, mission_item_description, mission_item_active).  
**excellence_section**: excellence_subtitle, excellence_title, excellence_description, excellence_image.  
**excellence_items**: Numbered excellence points.  
**skincare_items**: Optional skincare highlights (with skincare_item_active for emphasis).

---

## 18. 404 PAGE (Options or 404 template)

| ACF Field | Value to Enter |
|-----------|----------------|
| **error_page_title** | Oops! Page not found |
| **error_page_description** | The page you are looking for does not exist or has been moved. |
| **error_button_text** | Back to home |
| **error_button_link** | Leave empty (theme uses home_url()) |

---

# IMAGE PROMPTS (for AI-generated images)

**How to use:** Copy the full prompt (inside the quote) and paste into your AI image tool (DALL·E, Midjourney, Ideogram, etc.). Use aspect ratio mentioned where needed. Style: clean, professional, Indian clinic, skin-care focus only.

---

### 1. Hero main image (wide / banner)
**Use in:** Home → Hero section main image  
**Aspect ratio:** 16:9 or 4:3 (landscape)

```
Professional dermatology clinic hero image for a skin hospital website. Modern multi-storey building exterior, clean beige or light stone facade, large signboard area for "Gupta Skin" hospital name, well-lit entrance, green plants or neat landscaping, clear sky or soft daylight. Style: realistic photography, welcoming and trustworthy, Indian urban clinic, no people in frame. High resolution, suitable for website hero banner. Do not include dental or tooth imagery.
```

---

### 2. Hero review image (small / circular)
**Use in:** Home → Hero section review box (small thumbnail)  
**Aspect ratio:** 1:1 (square, will be shown circular)

```
Simple circular avatar or profile silhouette for a patient review badge. Soft neutral background, single person silhouette from shoulders up, gender-neutral, professional and friendly. Minimal style, no face details, suitable for trust/review section. Clean, modern, light grey or cream background.
```

---

### 3. About image 1 (reception)
**Use in:** Home & About Us → About section first image  
**Aspect ratio:** 4:3 or 3:2 (landscape)

```
Interior photograph of a modern skin clinic reception area. White reception desk with wooden base, clean walls, soft overhead lighting, comfortable waiting chairs in frame, professional and calm atmosphere. Indian clinic aesthetic, bright and hygienic, no visible dental equipment. Style: realistic, high-end clinic, welcoming. No people or with blurred staff silhouette only.
```

---

### 4. About image 2 (clinic interior / waiting)
**Use in:** Home & About Us → About section second image  
**Aspect ratio:** 4:3 or 3:2 (landscape)

```
Interior of a modern dermatology clinic. Bright consultation corridor or waiting area, light-coloured walls, wooden or neutral furniture, potted plants, soft natural light from windows. Clean, organised, professional. Indian hospital interior style, skin clinic only. Realistic photography, no dental signs or equipment.
```

---

### 5. Why choose us image (consultation room)
**Use in:** Home → Why choose us section  
**Aspect ratio:** 4:3 or 1:1

```
Professional dermatologist consultation room interior. Large wooden desk with glass top, ergonomic doctor chair, patient chairs, computer monitor, medical bookshelf in background, neat and organised. Well-lit, cream or off-white walls, horizontal blinds on window. Conveys expertise and trust. Realistic, clean, Indian clinic. No dental elements.
```

---

### 6. Process / video section image (doctor cabin)
**Use in:** Home → Our process section (video/thumbnail area)  
**Aspect ratio:** 16:9 or 4:3 (landscape)

```
Doctor's cabin or consultation room for a skin clinic. Spacious L-shaped wooden desk with glass top, two monitors, black ergonomic chair, three black visitor chairs, tall bookshelf filled with medical books against wall, weighing scale visible. Light walls, horizontal blinds, professional and tidy. Realistic interior photography, dermatology clinic, Indian setting. No dental equipment.
```

---

### 7. How we work image (consultation scene)
**Use in:** Home → How we work section  
**Aspect ratio:** 4:3 or 3:2

```
Warm professional scene of a dermatology consultation. Doctor and patient in a clean consultation room, desk between them, soft lighting, friendly and reassuring mood. Modern clinic interior, light colours, Indian context. Style: realistic, trustworthy, focus on skin care. Either show from behind patient (doctor visible) or wide shot of room. No dental or tooth imagery.
```

---

### 8. Our benefit image (treatment / result vibe)
**Use in:** Home → Our benefit section (centre image)  
**Aspect ratio:** 1:1 or 4:3

```
Positive image suggesting skin care results. Option A: Close-up of healthy glowing skin (cheek or hand), soft lighting, clean and natural. Option B: Woman from side or back, receiving gentle facial or skin care in a clinic, blurred background, professional and calming. No identifiable face unless generic stock style. Style: professional, hopeful, dermatology and skin health. High quality, suitable for medical website.
```

---

### 9. Transformation before/after (ethical)
**Use in:** Home → Our results section (only with patient consent)  
**Aspect ratio:** 1:1 or 4:3 per image

```
Before and after skin treatment comparison, ethical and professional. Same lighting and angle for both. Skin area only (e.g. cheek, arm), no full face. Slight improvement in texture or tone in "after" side. Label areas as "Before" and "After" in subtle text. Medical, trustworthy style. Alternatively: two panels with blurred or silhouette figure, suggesting transformation without showing real person. Do not use identifiable individuals without consent.
```

---

### 10. Testimonial author images (avatar)
**Use in:** Home & About Us → Testimonials (author photo)  
**Aspect ratio:** 1:1 (square, often shown as circle)

```
Neutral professional avatar for patient testimonial. Soft-focus portrait from shoulders up, warm skin tone, friendly expression, plain light background. Generic, respectful of privacy, suitable for "Patient" or "Skin treatment" label. Style: professional stock photo, welcoming, not celebrity. Can be silhouette or lightly blurred if preferred for privacy.
```

---

### 11. Excellence image (About Us page)
**Use in:** About Us → Our excellence section  
**Aspect ratio:** 4:3 or 3:2

```
Modern skin clinic treatment room or excellence area. Clean equipment (e.g. laser device or skincare machine), tidy counter, white or cream walls, professional lighting. Conveys advanced technology and care. Indian dermatology clinic, no dental. Realistic photography, hygienic and high-end. No identifiable patients in frame.
```

---

### 12. 404 error page image
**Use in:** 404 template → error image  
**Aspect ratio:** 1:1 or 4:3

```
Friendly 404 page not found illustration for a medical website. Soft colours, simple character or icon looking lost or searching (e.g. with magnifying glass or map). Clean, minimal, professional. Light blue, cream and white palette. No scary or sad mood. Suitable for skin clinic or hospital. Vector or flat illustration style, not too cartoonish.
```

---

### 13. Logo (text-based / simple)
**Use in:** Header & Footer → Logo upload  
**Format:** Prefer SVG or PNG with transparent background.  
**Note:** Many AIs are better at “logo concept” than exact text. You may design in Canva/Illustrator using this brief.

```
Simple professional logo concept for "Gupta Skin" skin clinic. Minimal design: elegant letter G or abstract skin/leaf motif, clean sans-serif feel. Colours: dark green or teal with white, or navy with gold accent. Trustworthy, medical, modern. No tooth or dental symbol. Optional small tagline "Skin & Dental Hospital" below. Suitable for header and footer, works on light and dark background.
```

---

# YOAST SEO – DATA FOR EACH PAGE

Fill these in **WordPress Admin → Pages → [Page] → Yoast SEO** (or Rank Math) box. Use **SEO Title** and **Meta Description**; **Focus keyphrase** is optional but helps Yoast give tips.

---

## Home Page (template: Home Page / index.php)

| Field | Value |
|-------|--------|
| **SEO Title** | Best Dermatologist in Alwar \| Gupta Skin & Dental Hospital |
| **Meta Description** | Expert skin care & dermatology in Alwar. Acne, pigmentation, cosmetic treatments & more. Book appointment with Dr. Rahul Gupta at Gupta Skin & Dental Hospital. |
| **Focus keyphrase** | dermatologist in Alwar |

---

## About Us (template: About Us)

| Field | Value |
|-------|--------|
| **SEO Title** | About Us \| Gupta Skin & Dental Hospital – Expert Dermatology Alwar |
| **Meta Description** | Meet Dr. Rahul Gupta & our team. Learn about our mission, procedures, and commitment to skin health. Gupta Skin & Dental Hospital, Alwar. |
| **Focus keyphrase** | skin hospital Alwar |

---

## Gallery (template: Gallery Page)

| Field | Value |
|-------|--------|
| **SEO Title** | Photo Gallery \| Gupta Skin & Dental Hospital Alwar |
| **Meta Description** | View our clinic, cabin, and facility photos. Gupta Skin & Dental Hospital – your trusted dermatology centre in Alwar. |
| **Focus keyphrase** | skin clinic gallery Alwar |

---

## Contact Us (template: Contact Us)

| Field | Value |
|-------|--------|
| **SEO Title** | Contact Us \| Book Appointment – Gupta Skin & Dental Hospital Alwar |
| **Meta Description** | Book an appointment or visit us in Alwar. Find address, phone, timings & contact form. Gupta Skin & Dental Hospital – dermatology & skin care. |
| **Focus keyphrase** | book appointment dermatologist Alwar |

---

## Privacy Policy (template: Privacy Policy)

| Field | Value |
|-------|--------|
| **SEO Title** | Privacy Policy \| Gupta Skin & Dental Hospital |
| **Meta Description** | How we collect, use and protect your data. Privacy policy of Gupta Skin & Dental Hospital, Alwar. |
| **Focus keyphrase** | privacy policy |

---

## Terms and Conditions (template: Terms and Conditions)

| Field | Value |
|-------|--------|
| **SEO Title** | Terms and Conditions \| Gupta Skin & Dental Hospital |
| **Meta Description** | Terms of use and conditions for website and services. Gupta Skin & Dental Hospital, Alwar. |
| **Focus keyphrase** | terms and conditions |

---

### Yoast tips

- **SEO Title:** 50–60 characters; include main keyword and brand.
- **Meta Description:** 150–160 characters; clear benefit + location (Alwar) + CTA if needed.
- **Focus keyphrase:** One main phrase per page (e.g. dermatologist Alwar, skin clinic Alwar).
- **Canonical URL:** Usually leave default (same as page URL).
- **Social (Facebook/Twitter):** Yoast often uses SEO title + meta description; override only if you want different social text.

---

# QUICK CHECKLIST

- [ ] Home page: Hero, CTA box, About, Doctor, Why choose, Process, How we work, Benefits, Results, FAQs, Testimonials  
- [ ] About Us page: About block, Doctor, Procedures, Mission/Vision, Excellence, FAQs, Testimonials  
- [ ] Header: Logo, menu, Book Appointment  
- [ ] Footer: Book appointment block, address, phone, email, quick links, social, copyright, ticker  
- [ ] 404: Title, description, button  
- [ ] Doctor profile: All 8 fields + image  
- [ ] All images uploaded or AI-generated and linked in ACF  

Once filled, fallbacks in the theme will only show when a field is left empty; otherwise admin data will appear.



⭐⭐⭐⭐⭐

Neha Sharma
Software Engineer

“I struggled with acne for years, but the treatment here completely transformed my skin. The doctor explained everything clearly and the results were visible within a few weeks. Highly recommended for anyone facing skin issues.”

⭐⭐⭐⭐⭐

Rahul Verma
Marketing Manager

“I visited for hair fall treatment and the improvement has been amazing. The staff is very supportive and the treatment plan was perfectly suited to my condition. I feel much more confident now.”

⭐⭐⭐⭐⭐

Pooja Mehta
School Teacher

“The pigmentation treatment worked wonderfully for me. The clinic maintains great hygiene and the doctor gives personal attention to every concern. My skin looks healthier and brighter than ever.”

⭐⭐⭐⭐⭐

Amit Singh
Business Owner

“I opted for laser skin treatment and the experience was smooth and painless. The clinic environment is comfortable and professional. I am very satisfied with the results and overall care.”