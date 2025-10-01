<?php
$partner_logos = [
    'https://static.wixstatic.com/media/f1bc76_d470c6b564e2457da6ec0676c3300ccb~mv2.png',
    'https://static.wixstatic.com/media/f1bc76_ce96a2224b4f432d9bb5af4c70f1f999~mv2.png',
    'https://static.wixstatic.com/media/f1bc76_d1c5f4f14e604dc9b4d78cc10ce417a1~mv2.png',
    'https://static.wixstatic.com/media/f1bc76_c43f0e9010804574a43c0cd1e7781bee~mv2.png',
    'https://static.wixstatic.com/media/f1bc76_d470c6b564e2457da6ec0676c3300ccb~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_ce96a2224b4f432d9bb5af4c70f1f999~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_d1c5f4f14e604dc9b4d78cc10ce417a1~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_c43f0e9010804574a43c0cd1e7781bee~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_d470c6b564e2457da6ec0676c3300ccb~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_ce96a2224b4f432d9bb5af4c70f1f999~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_d1c5f4f14e604dc9b4d78cc10ce417a1~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_c43f0e9010804574a43c0cd1e7781bee~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_d470c6b564e2457da6ec0676c3300ccb~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_ce96a2224b4f432d9bb5af4c70f1f999~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_d1c5f4f14e604dc9b4d78cc10ce417a1~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_c43f0e9010804574a43c0cd1e7781bee~mv2.png', // Duplicated for smooth loop
    'https://static.wixstatic.com/media/f1bc76_d470c6b564e2457da6ec0676c3300ccb~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_ce96a2224b4f432d9bb5af4c70f1f999~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_d1c5f4f14e604dc9b4d78cc10ce417a1~mv2.png', // Duplicated again for wider screens
    'https://static.wixstatic.com/media/f1bc76_c43f0e9010804574a43c0cd1e7781bee~mv2.png', // Duplicated again for wider screens
];
?>

<section class="partner-logos py-5">
    <div class="container text-center">
        <h2 class="mb-4">Trusted By</h2>
    </div>
    <div class="logos-slider">
        <div class="logos-track">
            <?php foreach ($partner_logos as $index => $logo_url): ?>
                <div class="slide">
                    <img src="<?php echo htmlspecialchars($logo_url); ?>" alt="Partner Logo <?php echo $index + 1; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<style>
    .partner-logos h2 {
        color: #888;
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .logos-slider {
        overflow: hidden;
        padding: 20px 0;
        background: transparent;
        white-space: nowrap;
        position: relative;
    }

    .logos-slider:before,
    .logos-slider:after {
        position: absolute;
        top: 0;
        width: 100px;
        height: 100%;
        content: "";
        z-index: 2;
    }

    .logos-slider:before {
        left: 0;
        background: linear-gradient(to left, rgba(241, 243, 245, 0), var(--td-bg));
    }

    .logos-slider:after {
        right: 0;
        background: linear-gradient(to right, rgba(241, 243, 245, 0), var(--td-bg));
    }
    .logos-track {
        display: inline-block;
        animation: scroll 40s linear infinite;
    }

    .slide {
        display: inline-block;
        height: 50px;
        width: 180px;
        margin: 0 40px;
    }

    .logos-slider:hover .logos-track {
        animation-play-state: paused;
    }

    .slide img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        filter: grayscale(100%) brightness(0.5);
        opacity: 0.8;
        transition: all 0.1s ease;
    }

    .slide img:hover {
        filter: grayscale(0) brightness(1);
        opacity: 1;
        transform: scale(1.1);
    }

    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-180px * 8)); } /* (slide width + margin) * number of original slides */
    }
</style>