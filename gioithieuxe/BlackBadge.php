<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Badge Ghost Series II</title>
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
    <h2>Black Badge Ghost Series II</h2>
    <?php
    $images = [
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_1.png",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_7.png",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_9.jpg",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_12.png",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_10.png",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_11.png",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_14.jpg",
        "https://photo.znews.vn/w1200/Uploaded/aobhuua/2024_10_16/Rolls_Royce_Black_Badge_Ghost_Series_II_15.png"

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
                <td>603 hp</td>
            </tr>
            <tr>
                <th>Momen xoắn cực đại</th>
                <td>841 Nm</td>
            </tr>
            <tr>
                <th>Tóc độ tối đa</th>
                <td>250 km/h</td>
            </tr>
            <tr>
                <th>Thời gian tăng tốc(0-100 km/h)</th>
                <td>4.7 seconds</td>
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
            <h3>Rolls-Royce Ghost Black Badge Series II </h3>
            <p>The most powerful, agile and technical expression of Black Badge, Rolls-Royce's disruptive alter ego, is embodied by Ghost. Today, the marque presents a daring evolution of this unapologetic and uniquely driver-focused motor car with Black Badge Ghost Series II, meticulously redesigned to provide this rebellious group of clients with a dramatic canvas for their bold Bespoke commissions.</p>
            <h3>BLACK BADGE GHOST SERIES II: EXTERIOR</h3>
            <p>Black Badge Ghost Series II's daring is in its subtle yet impactful exterior design. The most significant styling statement is the lower grille, marking the first time Black Badge Ghost has received a unique styling treatment. The lower brake air intake now features a new geometry, with two darkened chrome strips running longitudinally to functional air ducts, surrounded by technical black chrome frames. These pieces emphasise the verticality and solidity of the motor car's Pantheon Grille, behind which lies the centrepiece of this motor car - the uncompromising and potent V12 engine.</p>
            <p>Black Badge Ghost Series II retains the Black Badge-defining black chrome treatment, where Rolls-Royce hallmarks such as the Spirit of Ecstasy, Pantheon Grille and side-mounted 'Badge of Honour' are darkened. To create the effect, a specific chrome electrolyte is introduced to the traditional chrome plating process that is co-deposited on the stainless-steel substrate, darkening the finish. Each darkened component is precision-polished by hand to achieve a mirror-black finish. For the first time on Black Badge Ghost, the door handles are completed with a black finish, further extending the noir effect that captivates the world's most disruptive super-luxury consumers.</p>

            <h3>BLACK BADGE GHOST SERIES II: A DRAMATIC WHEEL TREATMENT</h3>
            <p>Black Badge Ghost Series II's most dramatic exterior statement is a 22-inch part-polished, seven-spoke forged wheelset. Styled to project the mechanical complexity of its legendary high-power V12 engine and chassis technology, the reduced visual mass of the wheel and slender spoke geometry provide a clear view of the powerful disc brakes. This design signals the motor car's potency and extraordinary dynamic abilities - a defining aspect of Black Badge Ghost's character that draws an increasing number of clients to the Rolls-Royce brand and inspires the boldest Bespoke commissions.</p>
            <h3>BLACK BADGE GHOST SERIES II: INTERIOR</h3>          
            <p>The dark, technical surfaces that codify Black Badge are used discreetly yet extensively within the interior of Black Badge Ghost Series II. Perhaps the subtlest illustration of Rolls-Royce's alter ego is within the new Clock Cabinet; the vitrine houses an analogue timepiece and an up-lit Spirit of Ecstasy figurine, presented in black chrome rather than a mirror-polished finish. This elegant expression of contemporary craft is placed alongside the uprated Central Information Display, which now integrates the marque's new advanced SPIRIT operating system.</p>
            <h3>BLACK BADGE GHOST SERIES II: CRAFTING CARBON FIBRE</h3>
            <p>Below the glass fascia and throughout the interior, Black Badge Ghost Series II features a meticulously crafted Technical Carbon surface finish. The marque's craftspeople developed a complex but restrained diamond-shaped weave using carbon and metallic fibres on top of a black Bolivar wood base. Leaves woven from resin-coated carbon and contrasting metal-coated thread are laid by hand in a diamond pattern, which creates a three-dimensional effect. Each component is then cured for one hour under pressure at 100°C. The surface is sand-blasted to create a 'key' for six layers of lacquer, which is hand-sanded before being polished to a brilliant finish. The final effect is subtle, yet rewards those who examine it with remarkable depth and clarity.</p>
            <p>If Immersive Seating is commissioned with a Centre Console, clients can specify the Black Badge family motif, the infinity symbol, onto the rear Technical Carbon 'Waterfall' section that separates the rear reclining seats and conceals the Champagne cooler. Rendered in aerospace-grade aluminium, it is applied between the third and fourth layers of six layers of tinted lacquer, which appears to make the symbol float.</p>
            <p>Black Badge Ghost Series II also uses an advanced technique known as physical vapour deposition to darken the interior metals. The speaker grilles and air vent surrounds on the dashboard and in the rear cabin are enhanced with this process, which does not discolour or tarnish through repeated use, exposure to temperature extremes, or over time.</p>
            <h3>BLACK BADGE GHOST SERIES II: A DISRUPTIVE MATERIAL MIX</h3>
            <p>Black Badge clients are invited to explore the new materials made available for Ghost Series II. This includes the marque's dramatic Duality Twill textile, an innovative rayon fabric made from bamboo. The development of this bold new material was inspired by the extensive bamboo grove in Le Jardin des Méditerranées on the Côte d'Azur, which neighbours Sir Henry Royce's former winter home, Villa Mimosa. It is embroidered with an artistic 'Duality' graphic, which is based on an abstract interpretation of the two interlinked letter R initials of the marque's founders. A complete Duality Twill interior can incorporate up to 2.2 million stitches and 11 miles of thread, taking up to 20 hours to complete. This exquisite material can be made even more impactful with daring and extrovert contrast colourways that clients can create with 51 colours of thread to choose from, further elevating this remarkable new finish for Black Badge clients.</p>
            <p>Alternatively, clients may choose Placed Perforation - an innovative contemporary craft technique in which small perforations are made in the seat leather to create unique artworks. The perforations vary in size to create the perception of depth, allowing detailed and seemingly three-dimensional graphics to be created. The initial pattern is inspired by the shifting shapes and shadows of clouds over the Home of Rolls-Royce at Goodwood. It is composed of up to 107,000 0.8- and 1.2-millimetre perforations, each individually examined to ensure absolute uniformity.</p>
            <h3>BLACK BADGE GHOST SERIES II: ENGINEERING</h3>
            <p>In Black Badge Ghost Series II, the formidable V12 engine is presented in a high-power configuration, producing 29PS more power and 50NM more torque than Ghost Series II. As with all Rolls-Royce Black Badge models, the 'Low' button situated on the gear selection stalk unlocks Black Badge Ghost's full suite of technologies, including a 50% increase in gearshift speeds when the throttle is depressed to 90%, and a subtly more voluble note from the motor car's exhaust system - features that dramatise, but never compromise the effortless Rolls-Royce driving experience.</p>
            <p>To harness this additional power, the Black Badge Planar Suspension system is used for Black Badge Ghost Series II. As with Ghost Series II, this decorated chassis technology incorporates a unique Upper Wishbone Damper unit above the front suspension assembly. This is linked with continuously variable, electronically controlled shock absorbers and self-levelling air strut assemblies front and rear to create an even more agile expression of the marque's signature 'magic carpet ride'</p>
            <p>To inspire driver confidence, when exploring the motor car's significant power reserves, the braking bite point has been raised, and pedal travel decreased, directly responding to client requests for a uniquely potent expression of the Rolls-Royce brand.</p>
            <h3>THE LUXURY OF AGILITY</h3>
            <p>Black Badge Ghost Series II reflects a growing desire among the marque's clients to enjoy a dramatic expression of the brand's uncompromising V12 engine and uniquely advanced chassis systems while benefitting from Rolls-Royce's peerless Bespoke capabilities. This extraordinary new motor car builds on the overwhelming success of its predecessor, embodying a bold vision of luxury in motion.</p>
            </div>
    </section>

    <footer>
        <p>&copy; 2025 Rolls-Royce Motor Cars. All rights reserved.</p>
    </footer>

</body>
</html>
