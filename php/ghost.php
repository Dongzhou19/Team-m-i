<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll-Royce Ghost Extended Series II </title>
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle, #111 60%, #1f1f1f 100%);
            text-align: center;
            color: #f5f5f5;
        }
        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #ffffff;
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 0 0 30px rgba(200, 200, 200, 0.5);
        }
        .carousel {
            position: relative;
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(255, 255, 255, 0.1), 0 4px 15px rgba(0, 0, 0, 0.9);
            border: 2px solid rgba(255, 255, 255, 0.2);
            background: linear-gradient(to bottom, #1a1a1a, #333);
        }
        .carousel img {
            width: 100%;
            display: none;
            transition: opacity 0.7s ease-in-out;
        }
        .carousel img.active {
            display: block;
            opacity: 1;
        }
        .controls {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .controls button {
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
            box-shadow: 0 4px 10px rgba(233, 30, 99, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .controls button:hover {
            transform: scale(1.2);
            box-shadow: 0 8px 20px rgba(233, 30, 99, 0.8);
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: left;
            background: rgba(17, 17, 17, 0.9);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
            color: #ffffff;
        }
        table th, table td {
            padding: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        table th {
            background: #333;
            color: white;
        }
        table tr:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .details {
            text-align: center;
            max-height: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            position: relative;
            transition: max-height 0.3s ease;
        }
        .header {
            text-align: center;
            padding: 5px;
            background: #383535;
            border-bottom: 3px solid gold;
        }

        .logo img {
            width: 30px;
            height: auto;
        }
    </style>
</head>
<body>
<header class="header">
        <div class="logo">
            <a href="bdk.php">
                <img src="../images/icon/logo.png" alt="Logo" />
            </a>
        </div>
            <h2>Roll-Royce Ghost Extended Series II </h2>
    </header>
<section id="images">
    
    <?php
    $images = [
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii2-15202725.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii3-15223366.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii5-15234798.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii11-15240943.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii15-15243741.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii12-15251997.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii13-15253888.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii1-15272826.jpg",
        "https://cdn-i.vtcnews.vn/resize/th/upload/2024/10/09/rollsroyceghostseriesii10-15284380.jpg"
    ];
    ?>
    <div class="carousel">
        <?php foreach ($images as $index => $image): ?>
            <img src="<?php echo $image; ?>" alt="Rolls-Royce Ghost image <?php echo $index + 1; ?>" class="carousel-image <?php echo $index === 0 ? 'active' : ''; ?>">
        <?php endforeach; ?>
    </div>
    <div class="controls">
        <button class="prev">&#9664; Previous</button>
        <button class="next">Next &#9654;</button>
    </div>
</section>
<section id="Thông số kĩ thuật">
        <h2>Thông số kĩ thuật</h2>
        <table>
            <tr>
                <th>Động cơ</th>
                <td>6,6L V12 Twin Turbo</td>
            </tr>
            <tr>
                <th>Công suất cực đại</th>
                <td>563 hp</td>
            </tr>
            <tr>
                <th>Momen xoắn cực đại</th>
                <td>780 Nm</td>
            </tr>
            <tr>
                <th>Tốc độ tối đa</th>
                <td>250 km/h</td>
            </tr>
            <tr>
                <th>Thời gian tăng tốc (0-100km/h)</th>
                <td>4.9 seconds</td>
            </tr>
        </table>
    </section>
<script>
    // Lấy tất cả ảnh và nút điều khiển
    const images = document.querySelectorAll('.carousel-image');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    // Hàm cập nhật trạng thái hiển thị ảnh
    function updateCarousel(index) {
        images.forEach((img, i) => {
            img.classList.remove('active');
            if (i === index) {
                img.classList.add('active');
            }
        });
    }

    // Xử lý nút Previous
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
        updateCarousel(currentIndex);
    });

    // Xử lý nút Next
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
        updateCarousel(currentIndex);
    });
</script>
<section id="details">
        <h2>Giới Thiệu</h2>
        <div class="details" id="detailContent">
            <h3>Rolls-Royce Ghost Series II </h3>
<p>Rolls-Royce Motor Cars presented Ghost Series II, a powerful, driver-orientated and elegant rendition of the most popular Rolls-Royce nameplate in history. In line with client requests, the subtle evolution of Ghost's monolithic and self-assured external appearance serves as a potent stage for Bespoke commissions. To extend their choices, clients now have access to interior finishes and features never previously available on Ghost, as well as advanced software technologies that see Bespoke enter the digital world. </p>

<h3> BACKGROUND </h3>

<p> Ghost is one of the most important Rolls-Royce motor cars of the Goodwood era. The first generation was introduced in 2009 to meet the needs of what was then a completely new category of luxury consumer. These clients, who were predominantly younger than those the marque had spoken to with its initial motor car, Phantom, requested a model that was more approachable and versatile. They also sought a more distilled expression of the Rolls-Royce brand - and crucially, one that would allow them to make their own statements through Bespoke that they would relish driving themselves.

The second-generation Ghost, launched in 2020, advanced these principles significantly. An object lesson in design purity, its surface simplicity hid underlying design, engineering, and craftsmanship of extraordinary complexity - and power. Indeed, it was the most technologically advanced V12 Rolls-Royce ever created when it was introduced. This was based on a number of impulses: to give clients a pure, yet self-assured canvas for Bespoke commissions, underpinned by a uniquely agile, driver-orientated chassis.

Ghost clients immediately recognised the impact that they could make with Bespoke. This heralded an era of experimentation and expression - from the 'quiet luxury' codes later popularised by the fashion industry, to fearless and bright celebrations of colour. Consequently, Ghost clients invest, on average, 10% of the purchase price of their motor car in Bespoke.

Alongside its aesthetic treatment, the 2020 Ghost also took the crown as the most technologically advanced Rolls-Royce ever created. In particular, its Planar Suspension System, which took engineers 10 collective years to perfect, produced a sensation of 'flight on land' never previously achieved in a motor car. With a 6.75-litre twin-turbocharged V12 petrol engine, plus all-wheel steering and four-wheel drive, Ghost quickly became recognised as the most dynamic, driver-focused model in the Rolls-Royce family and the perfect touring machine. Indeed, clients frequently describe Ghost not as a saloon, but a superlative four-door grand tourer.

When the time came to update Ghost, Rolls-Royce spoke to its clients about their requirements. For them, Ghost's potential as a platform for personal, as well as engineering dynamism, was central to its appeal. Respecting their wishes, Rolls-Royce made subtle but meaningful design enhancements when forming Ghost Series II, and incorporated the remarkable, uncompromising powertrain that wrote this motor car into Rolls-Royce legend. </p>

<h3> GHOST SERIES II: EXTERIOR </h3>

<p> Ghost Series II is more closely aligned to Rolls-Royce's sheer, monolithic design approach than ever. The front end has been distilled into a clean and contemporary showcase for the illuminated Rolls-Royce Pantheon grille - an element of Rolls-Royce's design iconography that continues to be celebrated by clients worldwide. Ghost Series II's modern presence is captured in its updated headlight and daytime running light graphics, which flow from the lower section of the grille to the edge of the front wings, dropping down to emphasise the motor car's generous 2148mm width. The lower portion of the front end provides a foundation for the grille, augmented by new chrome embellishments that form a 'floating' visual plinth for the Spirit of Ecstasy mascot.

In rear view, Ghost Series II benefits from a new tail lamp configuration, harmonising the side and rear surfaces. This treatment was inspired by Spectre, each featuring two expressive, vertical light panels flanked by a curved chrome element, discreetly inscribed with the double 'R' monogram.

Clients can choose from two new 22-inch, 9-spoke wheel designs, one fully- and one part-polished. Both treatments are an elegant and modern complement to Ghost Series II's contemporary yet timeless design, and subtly reflect its underlying potency. </p>

<h3>GHOST SERIES II: A NEW MOOD CREATED THROUGH COLOUR </h3>

<p>For Ghost Series II, designers have also created a new exterior colour, joining the marque's existing palette of more than 44,000 prêt-à-porter hues and Bespoke colour service, where clients can craft their own shade and reserve it for their exclusive use. Named Mustique Blue, this metallic finish captures the hues and glamour of the Caribbean island it is named after, using glass and mica flakes to create a shimmer that evokes sunlight reflecting from a tropical sea.

The colour is also a reference to one of the earliest driver-focused Rolls-Royces - a lightweight 1929 Phantom II Continental prototype, which was finished in a similar blue hue. This motor car was created for Henry Royce's personal use and was one of the first motor cars in history to use pearlescent paint, which at the time was created using ground fish scales. It went on to win the 'Prix d'Honneur', at the prestigious Biarritz Concours d'Elegance in 1930.</p>

<h3>GHOST SERIES II: INTERIOR</h3>

<p>The interior of Ghost Series II celebrates craftsmanship, both analogue and digital. Housed in the new pillar-to-pillar glass panel, the Central Information Display incorporates the marque's advanced operating system. This enables clients to extend their Bespoke commission from hardware to software as the colour of the digital instrument dials can now be tailored to complement the motor car's interior palette or exterior finish, aligning with Ghost clients' fascination with new and contemporary ways to make Bespoke statements. SPIRIT also integrates Whispers, the Rolls-Royce private members application, allowing owners to send destinations directly to their motor car, view its location and manage vehicle locking remotely, highlighting that clients increasingly view their Rolls-Royce as central to a wider lifestyle experience.

Entertainment and connectivity functions have been significantly upgraded for Ghost Series II. Rear seat passengers can now connect up to two streaming devices to the rear screens, stream independently on each screen, and select their preferred entertainment from a newly developed interface, which also manages seating functions such as massaging, heating and cooling. Bluetooth® headphones of any type can be paired with the rear seat infotainment system, and all occupants benefit from an upgraded Wi-Fi® hotspot and USB-C® charging ports hidden discreetly in the centre console.</p>

<h3>GHOST SERIES II: AN UNRIVALED SOUNDSTAGE</h3>

<p>The peerless refinement of Rolls-Royce motor cars creates the ultimate auditorium for sound reproduction within the Ghost cabin. The marque's decorated 18-speaker audio system further evolves for Ghost Series II - it now incorporates an upgraded 1400-watt amplifier. This powers the marque's peerless speaker design, wherein cavities within the motor car's aluminium sill sections are used as resonance chambers for low-frequency speakers, essentially transforming the lower section of the motor car into a generous floor-standing speaker placed on its side.

For Bespoke Audio, this is further enhanced by two 'speakerless' exciters that, instead of using a cone, are bonded directly to the inside of the Headliner, transforming it into an expansive overhead sound stage. When a Starlight Headliner is selected in combination with the Bespoke Audio System, the fibreoptic cables used to create the celestial effect are compressed with a special acoustic membrane. This prevents the cabling from reverberating, and also channels sound down into the cabin. Two active microphones in the cabin constantly monitor the balance of frequencies and automatically adjust the amplifier to optimise the sound.</p>

<h3>GHOST SERIES II: NEW EXPRESSIONS OF CONTEMPORARY CRAFT</h3>

<p>Ghost Series II benefits from bold new expressions of contemporary craft, meticulously conceived by the marque's artisans. Alongside the Central Information Display, on the passenger side, is the new Spirit of Ecstasy Clock Cabinet. This vitrine houses an analogue timepiece and an up-lit, mirror-polished, solid stainless-steel Spirit of Ecstasy figurine. She is placed on a stage with a matte black back panel and high gloss side panels to create a reflection effect. On entering the motor car, the Spirit of Ecstasy is initially illuminated from below, as if she is being lit by a spotlight, before her stage lighting settles to a soft glow.

Alongside this exquisite detail, and spanning the full width of the passenger side, is the Illuminated Fascia - an advanced craft feature that debuted with Ghost in 2020. With Ghost Series II, the new Illuminated Fascia design looks to the stars for inspiration, capturing the movement of the night sky in a design reminiscent of time-lapse celestial photography. Clients are also able to create their own Illuminated Fascia motif in collaboration with the marque's Bespoke designers.

A new interior material named Grey Stained Ash has been crafted to complement Ghost Series II's elegant design enhancements. Like so much of Rolls-Royce's artisanal expressions of luxury, this extraordinary new material represents the coalescence of traditional master craftsmanship and innovation. This richly-grained, natural open-pore wood is stained by hand and enriched with microscopic metallic particles to create a unique and highly contemporary shimmering effect - a technique that took more than four years to develop.

Ghost Series II also continues Rolls-Royce's exploration of textiles with Duality Twill, a new rayon fabric made from bamboo. During a research trip, members of the Rolls-Royce design team visited Le Jardin des Méditerranées on the Côte d'Azur, which neighbours Sir Henry Royce's former winter home, Villa Mimosa. One of the botanical garden's defining features is an extensive bamboo grove, which Sir Henry would have seen, that inspired this innovative fabric. The twill textile is embroidered with a 'Duality' graphic, an abstract interpretation of the interlinked initial R of the marque's founders' names. In another allusion to the French Riviera, the design hints at the interweaving rope lines found on sailing yachts.

Duality Twill spent more than a year in development, in collaboration with a master weaver now based full-time at the Home of Rolls-Royce in Goodwood. Creating a full Duality Twill interior is a highly complex process incorporating up to 2.2 million stitches, 11 miles of thread, and can take 20 hours to complete. Each panel is individually prepared before being cut using a specially developed laser that seals the edges to prevent individual threads from coming loose. Once all panels are carefully positioned and stitched together to create a seamless whole, they are used to upholster the seating. The base twill textile is available in three colours - Lilac, Chocolate and Black - and the thread is available in 51 different hues, allowing clients to tailor their design according to their character, creating a bold contrasting effect or a subtle monochrome.

Alternatively, clients may choose Placed Perforation - an innovative contemporary craft technique in which small perforations are made in the seat leather to create unique artworks. The perforations vary in size to create the perception of depth, allowing detailed and seemingly three-dimensional graphics to be created. The initial pattern is inspired by the shifting shapes and shadows of clouds over the Home of Rolls-Royce at Goodwood. It is composed of up to 107,000 0.8- and 1.2-millimetre perforations, each individually examined to ensure absolute uniformity.</p>

<h3>GHOST SERIES II: ENGINEERING</h3>

<p>At the heart of Ghost Series II is the marque's uncompromising, potent and near-silent 6.75-litre twin-turbocharged V12 petrol engine and hallmark eight-speed gearbox. This powers the all-wheel steering and all-wheel drivetrain. Maximum torque is available from just 1,600rpm - only 600rpm above tick-over, creating the perception of one, endless gear and the unique 'waftability' associated with the Rolls-Royce experience.

The celebrated Planar Suspension System of Ghost Series II incorporates a unique Upper Wishbone Damper unit above the front suspension assembly. This acts in concert with the continuously variable, electronically controlled shock absorbers and self-levelling, high-volume air strut assemblies to create an even more stable and effortless expression of the marque's effortless 'magic carpet ride'. The five-link rear axle benefits from the same self-levelling high-volume air suspension technology.

The suspension and chassis systems are augmented with the marque's Flagbearer System, which uses cameras to read the road ahead and prepare the suspension for any changes in the road surface. This is supplemented with the marque's Satellite Aided Transmission, which uses GPS data to select the optimum gear for exiting a corner depending on the extent of its curvature. These technologies work as one, allowing Ghost to anticipate and react to the most demanding roads effortlessly, marrying peerless serenity with remarkable dynamism and agility.</p>

<h3>GHOST EXTENDED SERIES II: AN EVEN GREATER CANVAS FOR CREATIVITY</h3>

<p>Clients who seek the inherent agility and scope for Bespoke that Ghost Series II represents, but require the indulgence of superlative rear seating space, are invited to commission Ghost Extended Series II. The motor car offers 170mm more space in the rear suite, enabled by extending the rear doors and apertures only, which preserves its elegant silhouette.

Clients seeking the most elevated expression of Ghost Extended Series II can also commission the marque's reclining Serenity Seating, which recalls a private aircraft cabin experience. Like Ghost Series II, a Champagne cooler can also be requested. Rolls-Royce specialists consulted with a Master Sommelier and learned that the optimum serving temperatures of non-vintage Champagne is, on average, six degrees Celsius and for vintage Champagne, is broadly 11 degrees Celsius. Accordingly, the cooler operates two cooling modes, chilling to six degrees and 11 degrees Celsius.
These enhancements come at no cost to the motor car's exceptional dynamic capabilities. Indeed, Ghost Extended clients almost unanimously commission this motor car for self-driving with the benefit of enhanced rear seating space, rather than retain the services of a chauffeur.</p>
<h3>GHOST SERIES II: POTENCY AND INFINITE BESPOKE POTENTIAL</h3>
<p>Since its launch in 2009, Ghost has captured the spirit of Rolls-Royce's Goodwood era, which is defined by clients' desire to express their connoisseurship through increasingly complex and diverse Bespoke commissions. To satisfy this demand, Rolls-Royce is expanding its global network of Private Offices, offering clients around the world the experience of interacting with Designers and Bespoke specialists based in their region, to bring their visions to life. Furthermore, the marque has secured planning permission for a significant extension of its Home at Goodwood in West Sussex with the express aim of creating more space for Bespoke craft and technologies to grow.
Alongside this desire for increasingly complex Bespoke, many of today's Rolls-Royce clients demand a driving experience that is as potent and agile as it is composed, effortless and serene. This is a balance that Ghost Series II strikes perfectly, at no cost to either character -and without ever compromising the motor car's standing as a superlative and powerful super-luxury product.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Rolls-Royce Motor Cars. All rights reserved.</p>
    </footer>
</body>
</html>