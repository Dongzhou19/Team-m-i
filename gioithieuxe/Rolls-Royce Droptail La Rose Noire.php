<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolls-Royce Droptail La Rose Noire</title>
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
            height: 450px; /* Đặt chiều cao cố định */
            margin: 20px auto;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(255, 255, 255, 0.1), 0 4px 15px rgba(0, 0, 0, 0.9);
            border: 2px solid rgba(255, 255, 255, 0.2);
            background: linear-gradient(to bottom, #1a1a1a, #333);
        }
        .carousel img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%; /* Đặt ảnh full chiều cao */
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
            opacity: 0;
            transition: opacity 0.7s ease-in-out;
        }
        .carousel img.active {
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
    </style>
</head>
<body>

<section id="images">
    <h2>Rolls-Royce Droptail La Rose Noire</h2>
    <?php
    $images = [
        "https://www.netcarshow.com/Rolls-Royce-Droptail_La_Rose_Noire-2024-1280-1b54a2e6612a9d8236c21de961c0013de6.jpg?token=4093b549011ace755fd2cc2139afaf470a86fcec9f3059834514e06",
        "https://www.netcarshow.com/Rolls-Royce-Droptail_La_Rose_Noire-2024-1280-01cea3f30597b31ea5300f5941c8906164.jpg?token=cb6f5850011ace755fd2cc2139a1ac6659fad030b458a4bdef94802",
        "https://www.netcarshow.com/Rolls-Royce-Droptail_La_Rose_Noire-2024-1280-ed65bf25277babcd40dc6ea101e780d700.jpg?token=cb6f5850011ace755fd2cc2139a1ac6659fad030b458a97def94802",
        "https://www.netcarshow.com/Rolls-Royce-Droptail_La_Rose_Noire-2024-1280-be84843b5508997a3d8fb6cf41329aefce.jpg?token=cb6f5850011ace755fd2cc2139a1ac6659fad030b458a97def94802",
        "https://www.netcarshow.com/Rolls-Royce-Droptail_La_Rose_Noire-2024-1280-06fbdf279426c6e54510b8f7e07a199a8d.jpg?token=cb6f5850011ace755fd2cc2139a1ac6659fad030b458a00def94802",
        "https://www.netcarshow.com/Rolls-Royce-Droptail_La_Rose_Noire-2024-1280-36596f67884dd7090ca1d325308014fd8c.jpg"
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
                <td>6,75L V12 Twin Turbo</td>
            </tr>
            <tr>
                <th>Công suất cực đại</th>
                <td>593 hp</td>
            </tr>
            <tr>
                <th>Momen xoắn cực đại</th>
                <td>840 Nm</td>
            </tr>
            <tr>
                <th>Tóc độ tối đa</th>
                <td>250 km/h</td>
            </tr>
            <tr>
                <th>Thời gian tăng tốc(0-100 km/h)</th>
                <td>4,5 seconds</td>
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
            <h3>Rolls-Royce Droptail La Rose Noire </h3>
            <p>As a House of Luxury, Rolls-Royce Motor Cars constantly seeks to create personal and deeply meaningful luxury products that reflect the marque's clients' ambitions and personal codes of luxury. Rolls-Royce's unparalleled Bespoke capabilities enable clients to bring these desires to life through the commission of beautiful, handcrafted and truly individual Rolls-Royce motor cars.</p>
            <p>A small group of exceptional individuals wish to elevate this remarkable, deeply personal experience even further and move beyond the canvas of existing Rolls-Royce products. These highly ambitious and discerning clients seek the opportunity to work directly with the marque's designers, engineers and craftspeople to create completely unique Rolls-Royce motor cars beyond the brand's product portfolio, participating in every stage of their development. This is Rolls-Royce Coachbuild.</p>
            <p>Creatives within Rolls-Royce Coachbuild approach the motor car as an elevated expression of applied art - the discipline of creating something beautiful, intellectually stimulating and emotionally resonant, that has a clear and single purpose</p>
            <p>The renaissance of contemporary coachbuilding began in 2017 with 'Sweptail', a bold two-door coupé created in response to a client's wish to reprise the art of coachbuilding in partnership with Rolls-Royce. With its sharply tapering outline and full-length glass roof, it can be characterised as the Extrovert. It was followed by the unveiling of Boat Tail in 2021, a highly social open-top that amplified its clients' love of hosting - a motor car that unashamedly represents the Hedonist.</p>
            <p>Now, Rolls-Royce is proud to present Droptail: the third chapter in a remarkable story that reflects the absolute pinnacle of the Rolls-Royce brand, and by extension the super-luxury sector. For Droptail, the focus was placed on creating an intimate and cosseting interior, which would also serve as an unprecedented canvas for highly bespoke wood craft. Droptail captures the charm and embrace of two-seat motoring - it truly is the Romantic.</p>
            <p>Only four expressions of this remarkable motor car will be created, each telling a unique and personal story that reflects the ambition, visions and taste patterns of its commissioning client - all of whom are significant collectors, patrons of the arts and business leaders.</p>

            <h3>RENAISSANCE OF THE ROADSTER BODY TYPE</h3>
            <p>Droptail represents the renaissance of the roadster body type, which breaks free from the four-seat convention previously associated with Rolls-Royce. In the first decades of the twentieth century, Rolls-Royce supplied rolling chassis to coachbuilders, who then added specially commissioned bodies. While European clients were drawn to grand, four-door, chauffeur-driven saloons, a young and bold generation of American clients were specifying two-door, two-seat roadster bodies. In doing so, these assertive and confident self-drivers disrupted the traditional, more formal codes of the brand.</p>
            <p>Rolls-Royce Droptail is a highly contemporary projection of these values - a concept each commissioning client found deeply compelling. In capturing this spirit, Rolls-Royce Coachbuild designers studied the 1912 Rolls-Royce Silver Ghost 'Sluggard', the 1930 Rolls-Royce Phantom Brewster New York Roadster and the 1925 Rolls-Royce Silver Ghost Piccadilly. Like these motor cars, Droptail takes a highly distilled approach to design. Indeed, for Rolls-Royce's creatives and artisans, simplicity and absolute clarity is the most challenging brief of all, but the most rewarding to behold.</p>

            <h3>DROPTAIL EXTERIOR: FOCUS AND INTENT</h3>
            <p>At 5.3 metres long and 2 metres wide, the exterior dimensions of Droptail recall the compact proportions of early Rolls-Royce roadsters. Yet, as the motor car's progressive front end treatment clearly signals, this is not a retrospective pastiche of a classic Rolls-Royce. For Droptail, designers dared to introduce a new interpretation of the marque's most precious iconography: the Pantheon grille and the Badge of Honour.</p>
            <p>Ordinarily, the vanes of the marque's Pantheon grille are straight and upright, but for Droptail - and for the first time in Rolls-Royce history - they are 'kinked' towards the top of the radiator, gently reclining to create a 'temple brow' overhang. This progressive treatment creates a more informal expression of Rolls-Royce design principles, using shadow to connect the two front headlamps visually. This strong horizontal graphic, bookended by deep-set daytime running lights, forms the motor car's powerful brow line. Beneath, the grille falls to reveal relaxed, chamfered corners - another reference to the informal spirit of Droptail.</p>
            <p>In profile, Droptail is radically unique in its proportions, which amplify the motor car's driver-orientated configuration. This is characterised by a low and assertive stance, snug and enveloping cabin space and poised, taut surfacing. A dramatic negative body line is sculpted into the coachwork, falling from the front wheel and encouraging the eye to the rear of the motor car and to Droptail's 'sail cowls', which denote that it is a strict two-seater. Named after their resemblance to a yacht's jib, these sharp, angular forms rise behind the doors and curve gently inwards, subtly directing the eye to the motor car's occupants.</p>
            <p>Droptail's sail cowls frame an extraordinary feat of engineering. The aft deck section, which sits between the occupants, performs an aerodynamic function in that it produces downforce to improve stability when the motor car is travelling at speed. Realising this while retaining Droptail's signature 'dropping' rear end - a design style not ordinarily conducive to producing downforce without a peripheral 'wing' - was a considerable challenge. Indeed, the aft deck's final form is the product of a deep collaboration between the marque's designers and aerodynamicist and was resolved over a two-year period and 20 iterations.</p>
            <p>This elegant innovation led Droptail's commissioning clients to challenge the marque's designers with ever more complex requests. On reviewing Droptail in profile, one client declared that nothing but the door handles, Spirit of Ecstasy and Rolls-Royce monogram should interrupt its monolithic surfaces. To fulfil this request, engineers developed a door handle that incorporates a hidden lock mechanism and a discreetly integrated indicator lamp. The design team's reinterpretation of the Rolls-Royce 'Badge of Honour' is another testament to the freedoms within this department - it is distilled into a stainless steel 'Double R' monogram, which is placed on both sail cowls.</p>
            <p>Rolls-Royce Droptail concludes with a rear treatment that evokes the roadster spirit but also references nautical design. The generous horizontal transom section uses the sky's natural light to create an impression of width and solidity - a design feature inspired by racing sailing yachts of the thirties. The vertical rear lamps also cant forwards to signal the motor car's dynamic intent. Underneath, the tall rear diffuser is finished with a semi-transparent lacquer, highlighting its raw carbon-fibre finish and providing a visual foundation that anchors Droptail to the road.</p>

            <h3>DROPTAIL ROOF: A SECOND CHARACTER</h3>          
            <p>Droptail celebrates the intimacy of a two-seat roadster with a cocooning interior, cosseting and protecting occupants with a high waist-rail and low seating position. Commissioning clients were particularly compelled by the notion of a highly focussed, minimalistic approach to the interior. In response to this, Rolls-Royce designers sketched a fascia that celebrated minimalism and analogue tactility. Just three primary buttons are visible, yet all of the functionality of a contemporary Rolls-Royce remains. The fascia alone took four years of development, testing and homologation.</p>
            <p>This minimalist approach to the entire interior shape and form of Droptail was created to celebrate the discipline of woodcraft without interruption, thereby showcasing the exceptional craft skills of Rolls-Royce artisans. The generous surfaces and expressive sculpture carefully consider the orientation and specific placement of wood, highlighting its richness and striking natural beauty, purposefully catching light from multiple angles and recalling the organic forms of the most contemporary cabinetmakers.</p>
            <p>The most prominent gesture within the cabin is the curved shawl panel; a vast, uninterrupted and intricately formed section of wood that wraps around the driver and their companion, evoking a sense of companionship and intimacy that is entirely in tune with the romantic character of this cocooning two-seater roadster.</p>
            <p>A theatrical cantilevered plinth-like armrest between the two seats makes a bold signature statement with its uninterrupted, elliptical profile. At the touch of a button, the plinth glides backwards and forwards, allowing effortless access to the rotary information and entertainment system controller when required, then hiding it from view thereafter. Recalling the interior's cosseting treatment, the plinth itself is embraced by inner seat bolsters finished in soft, supple leather.</p>
            <p>Achieving the remarkable and unprecedented level of surface simplicity, which is such a vital part of Droptail's presence and character, was the most challenging undertaking in Coachbuild history.</p>

            <h3>DROPTAIL ENGINEERING: FREEDOM THROUGH BESPOKE</h3>
            <p>Completely new underpinnings were developed for Rolls-Royce Droptail beyond the marque's existing architecture. Reserved for Droptail's exclusive use, this rigid monocoque is constructed from aluminium, steel and carbon fibre. Steel is used for the load-bearing front wing and door sections, but from the b-pillar rearwards carbon fibre is used, comprising three bonded sections. Lightweight and infinitely formable, carbon fibre enabled the bold compound curves of Droptail's form to be realised. Indeed, the rear quarter panels are the largest carbon fibre panels ever created for a Rolls-Royce motor car.</p>

            

            <h3>DROPTAIL: A SHARED LEGACY. A BOLD FUTURE</h3>
            <p>The focus and precision of Droptail's execution represents the Coachbuild department's most detailed and technically demanding undertaking to date. It also represents Coachbuild's standing as the highest expression of applied art. Droptail's bold reimagining of Rolls-Royce iconography, focus on simplicity and permanence as a monument to its owners represents both a new standard in the luxury sector and clear confirmation that coachbuilding will form a significant part of Rolls-Royce's long-term strategy. Indeed, Droptail is a clear statement that the future of Rolls-Royce will be built in collaboration with its clients.</p>
           
            <h3>LA ROSE NOIRE: THE FIRST DROPTAIL</h3>
            <p>Rolls-Royce Motor Cars is privileged to present Rolls-Royce La Rose Noire Droptail, a dark, daring and dramatic coachbuilt masterpiece. This extraordinary motor car, presented to the clients who commissioned it at a private event close to Pebble Beach in California, symbolises the distillation of experiences, significant moments and objets d'art cherished by its owners - an international family that exemplifies connoisseurship and luxury of the very highest order. Indeed, Coachbuild designers described the family's talent for sensitive and informed curation in their homes and within their notable collection of motor cars and fashion icons, as an art form unto itself.</p>
            <p>Rolls-Royce La Rose Noire Droptail is inspired by the allure of the Black Baccara rose, an intense, velvet-like flower that originates in France and is beloved by the mother of the commissioning family. The dark pomegranate colour of its petals appears almost black in shade, but in direct light, a red, pearlescent shimmer is revealed on the dark surface. These two colours form the primary palette of La Rose Noire Droptail. The first red shade is named 'True Love' in recognition of the romance the client wished to capture in this commission. The darker tone is named 'Mystery', inspired by the mysterious nature of the rose, which appears to change colour when viewed from different angles. Indeed, it was the essence of true love and the mystery of exploration and travel that captivated the clients throughout the commissioning process.</p>

            <p>The exterior coachwork is finished in the lustrous and complex True Love red. Like the Black Baccara rose, the motor car also appears to change colour depending on the point it is examined from. To achieve this rich variation, surface finish specialists developed a completely new paint process, which was perfected over 150 careful iterations. A base coat, the colour of which is a closely guarded secret, was followed by five layers of clear lacquer, each blended with a slightly different tone of red.</p>
            <p>The duotone theme extends into La Rose Noire Droptail's brightwork. The dark finish, named Hydroshade due to its liquid quality, was developed specifically for this project. These pieces are not painted; rather, a specific chrome electrolyte is introduced in the chrome plating process and co-deposited on each stainless-steel substrate in a layer just one micron thick - roughly the same width as a strand of spider-web silk. This dark but reflective finish is continued on select metal details throughout the interior, each of which have been precision-polished by hand to achieve a high-gloss finish.</p>

            <h3>LA ROSE NOIRE: GLAMOUR DISTILLED</h3>
            <p>The most remarkable element of this extraordinary motor car is its cocooning interior. This reveals the most complex expression of parquetry ever created at Rolls-Royce - the product of nearly two years of development, intense experimentation and hand craftsmanship.</p>
            <p>The artwork represents an abstract expression of falling rose petals, formed using 1,603 pieces of black wood veneer triangles. The highly complex pattern is formed with 1,070 perfectly symmetrical elements forming the background, and 533 asymmetrically positioned red pieces representing the rose petals. The asymmetry was requested by the clients to represent a natural, organic 'scattering' of petals.</p>
            <p>Made from Black Sycamore wood sourced in France as a subtle tribute to the French provenance of La Rose Noire, each triangle is cut, sanded and precisely positioned by hand. The pieces that appear to be stained light and dark grey are in fact presented in their natural hue; the colour difference is achieved by using veneer from several logs with different 'figures' - the natural pattern on the veneer. Paint was used only to create the red pieces - to avoid the colour fading over time, the marque's artisans spent a year developing a new lacquer formula to protect this extraordinary projection of contemporary craft.</p>
            <p>This intricately detailed and embracing piece envelopes the motor car's occupants, stretching from the rear shawl panel through the doors and onto the expansive fascia. Its assembly required such intense concentration that the single craftsperson tasked with creating it could only work in one-hour sessions for no more than five hours total per day, to ensure they maintained the focus required for perfect execution. The artisan, who has been with Rolls-Royce since their apprenticeship, spent weeks working in absolute silence in a sound-insulated space to mitigate against any potential distractions. To create what is unquestionably a work of art in its own right took more than nine months in total.</p>
            <p>Resolving the interior, La Rose Noire Droptail's two seats are decorated at the edges with both dark red Mystery leather, and light red True Love leather, each finished with a subtle copper shimmer, evoking the pearlescent texture of the Black Baccara rose petals.</p>
            <h3>A SINGULAR TIMEPIECE</h3>
            <p>The fascia of Rolls-Royce La Rose Noire Droptail is provisioned with an integrated one-off timepiece by Audemars Piguet, which was specially commissioned by the client. The 43mm Royal Oak Concept Split-Seconds Chronograph GMT Large Date is powered by a unique self-winding Calibre 4407 movement, featuring a flyback chronograph and a split-seconds mechanism. Masterfully matched to La Rose Noire's colourway, it incorporates red counters and a red inner bezel, providing a bright contrast to the black 'openworked' dial highlighted with rhodium-toned bevels.</p>
            <p>Integrating the timepiece presented a significant challenge: the clients requested that it should both be mounted in the motor car and also be removable, so that it can be attached to a strap and worn. This was realised with a powered clasp mechanism that gently presents the timepiece at the touch of a button.</p>
            <p>Once the timepiece has been removed, the aperture in the fascia is covered with an elegant titanium openworked blank head watch highlighting a white-gold coin displaying a rose engraving, hand-sculpted by Audemars Piguet artisans. Subtle rose engravings on the motor car's Bespoke Audio speaker frets mirror this motif. Each of the pieces were meticulously crafted by hand in the Swiss brand's atelier and represent the only literal expressions of the Baccara Rose in the whole motor car.</p>
            <p>A slim, soft leather pouch in the door paniers houses the strap and the blank head watch while the timepiece is displayed in the fascia.</p>

            <h3>A COMMISSION TO CELEBRATE</h3>
            <p>To celebrate their Rolls-Royce La Rose Noire Droptail, the owners commissioned an exclusive vintage of Champagne de Lossy, one of their favourite wine properties. This is of particular significance given the special wine created for La Rose Noire Droptail is one of only a precious handful of vintages produced by the Chateau in its 160-year history.</p>
            <p>As the perfect staging point, the commissioning family requested a unique Rolls-Royce Champagne Chest. Appointed with matching rose petal parquetry and coordinated to match the colour palette and materials of the motor car, it is the product of the same meticulous attention to detail as the clients' coachbuilt Rolls-Royce.</p>
            <p>At the press of a button, the Champagne Chest opens, revealing an intricate champagne set replete with hand-blown crystal champagne flutes. The exterior lid converts to a serving tray made of bookmatched open pore Black Sycamore wood with a design of the Chateau central to the brushed and laser-cut stainless-steel inlay.</p>
            <p>The sides are adorned with the same intricate parquetry work as La Rose Noire Droptail. Once deployed, they reveal two hammocks cradling the clients' special edition Champagne de Lossy, designed to match the motor car's colour scheme. Stored thermal champagne coolers, made from black anodised aluminium and carbon fibre, are finished in the dark Mystery hue and ensure the champagne is maintained at the optimum drinking temperature.</p>
            <h3>LA ROSE NOIRE DROPTAIL: TAKING ITS PLACE IN THE ROLLS-ROYCE LEGEND</h3>
            <p>This bold and historic motor car is a romantic celebration of the couple who created it, characterised by passion and a restless desire for meaningful experiences. In commissioning this extraordinary expression of Droptail, this remarkable family has not only shaped their own legacy but also participated in the legend of Rolls-Royce Motor Cars.</p>
            </div>
    </section>

    <footer>
        <p>&copy; 2025 Rolls-Royce Motor Cars. All rights reserved.</p>
    </footer>

</body>
</html>
