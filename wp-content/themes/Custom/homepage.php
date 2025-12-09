<?php
/*
Template name: Homepage
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// ACF fields
$newsletter_title_bold = get_field( 'newsletter_title_bold' );
$newsletter_title_thin = get_field( 'newsletter_title_thin' );
$newsletter_intro = get_field( 'newsletter_intro' );
$after_title_bold = get_field( 'after_title_bold' );
$after_title_thin = get_field( 'after_title_thin' );
$after_text = get_field( 'after_text' );
$privacy_policy_text = get_field( 'privacy_policy_text' );
?>


<main id="newsletter">
    <div class="container">
        <div class="form">
            <div id="before-submit">
                <h1 class="title">
                    <span class="bold">
                        <?php if ($newsletter_title_bold) {
                            echo esc_html( $newsletter_title_bold);
                        } ?>
                    </span>
                    <span class="thin">
                        <?php if ($newsletter_title_thin) {
                            echo esc_html( $newsletter_title_thin );
                        } ?>
                    </span>
                </h1>
                <p class="text">
                    <?php if ($newsletter_intro) {
                        echo esc_html( $newsletter_intro );
                    } ?>
                </p>
            </div>
            <div id="after-submit" style="display:none;">
                <h2 class="title">
                    <span class="bold">
                        <?php if ($after_title_bold) {
                            echo esc_html( $after_title_bold );
                        } ?>
                    </span>
                    <span class="thin">
                        <?php if ($after_title_thin) {
                            echo esc_html( $after_title_thin );
                        } ?>
                    </span>
                </h2>
                <p class="text">
                    <?php if ($after_text) {
                        echo esc_html( $after_text );
                    } ?>
                </p>
                <a class="btn-grey" href="https://www.bigeye.ee" target="_blank">Tagasi avalehele</a>
            </div>
            <?php echo do_shortcode('[ninja_form id=1]'); ?>
            <div class="bottom-row">
                <div class="socials">
                    <a class="fb" href="https://www.facebook.com/bigeyedevelopers/" target="_blank">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.9312 14.6897C26.9312 7.93242 21.447 2.44824 14.6897 2.44824C7.93242 2.44824 2.44824 7.93242 2.44824 14.6897C2.44824 20.6146 6.65931 25.5479 12.2414 26.6863V18.3622H9.79312V14.6897H12.2414V11.6293C12.2414 9.26674 14.1633 7.34483 16.5259 7.34483H19.5863V11.0173H17.138C16.4647 11.0173 15.9139 11.5681 15.9139 12.2414V14.6897H19.5863V18.3622H15.9139V26.87C22.0958 26.2579 26.9312 21.043 26.9312 14.6897Z" fill="#001B52"/>
                        </svg>
                    </a>
                    <a class="linkedin" href="https://ee.linkedin.com/company/bigeye-ou" target="_blank">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2592 3.67188C23.9085 3.67188 24.5313 3.92982 24.9904 4.38896C25.4496 4.84811 25.7075 5.47084 25.7075 6.12017V23.2582C25.7075 23.9076 25.4496 24.5303 24.9904 24.9894C24.5313 25.4486 23.9085 25.7065 23.2592 25.7065H6.12115C5.47182 25.7065 4.84908 25.4486 4.38994 24.9894C3.9308 24.5303 3.67285 23.9076 3.67285 23.2582V6.12017C3.67285 5.47084 3.9308 4.84811 4.38994 4.38896C4.84908 3.92982 5.47182 3.67188 6.12115 3.67188H23.2592ZM22.6471 22.6462V16.1582C22.6471 15.0998 22.2267 14.0847 21.4783 13.3363C20.7299 12.5879 19.7148 12.1675 18.6564 12.1675C17.6159 12.1675 16.404 12.804 15.8164 13.7588V12.4H12.401V22.6462H15.8164V16.6111C15.8164 15.6685 16.5754 14.8973 17.518 14.8973C17.9725 14.8973 18.4084 15.0779 18.7298 15.3993C19.0512 15.7207 19.2318 16.1566 19.2318 16.6111V22.6462H22.6471ZM8.42254 10.4781C8.96798 10.4781 9.49107 10.2615 9.87675 9.87578C10.2624 9.4901 10.4791 8.967 10.4791 8.42157C10.4791 7.28311 9.561 6.35276 8.42254 6.35276C7.87386 6.35276 7.34765 6.57072 6.95967 6.9587C6.5717 7.34667 6.35373 7.87288 6.35373 8.42157C6.35373 9.56002 7.28408 10.4781 8.42254 10.4781ZM10.1241 22.6462V12.4H6.73322V22.6462H10.1241Z" fill="#001B52"/>
                        </svg>
                    </a>
                </div>
                <a href="https://www.bigeye.ee" target="_blank">bigeye.ee</a>
            </div>
        </div>

        <div class="bigeye">
            <svg width="354" height="474" viewBox="0 0 354 474" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g xmlns="http://www.w3.org/2000/svg" id="g">
                    <path d="M155.047 48.1982C95.0583 48.1984 46.6904 98.1929 46.6904 159.527C46.6907 220.862 95.0585 270.855 155.047 270.855C215.035 270.855 263.404 220.862 263.404 159.527C263.404 98.1928 215.036 48.1982 155.047 48.1982ZM69.0645 285.566L66.8711 283.916C29.6938 255.949 5.50015 210.679 5.5 159.527C5.5 74.3204 72.6092 5.50015 155.047 5.5C181.865 5.5 207.005 12.7495 228.752 25.4932L230.095 26.2803L231.651 26.2471L239.245 26.082H322.276C330.306 26.082 336.678 28.8512 341.034 33.2441C345.398 37.6443 348.086 44.0236 348.086 51.8701C348.086 59.7437 345.476 65.787 341.255 69.8682C337.016 73.9666 330.651 76.5664 322.276 76.5664H281.217L285.77 84.7422C286.876 86.7295 287.911 88.7634 288.949 90.877V90.8779C298.973 111.527 304.595 134.85 304.595 159.527C304.594 243.653 239.201 311.794 158.207 313.508L158.145 313.509L158.083 313.512C157.139 313.553 156.175 313.554 155.047 313.554C144.932 313.554 135.059 312.502 125.492 310.533L120.347 309.475L119.053 314.566C115.489 328.596 109.649 341.456 103.378 352.11L94.6084 367.009L110.374 359.916C133.039 349.719 158.566 343.752 183.648 342.988V343.022H189.148C249.392 343.023 293.912 384.341 293.912 438.295C293.912 447.608 290.761 454.994 285.625 460.046C280.482 465.106 272.926 468.238 263.372 468.238C255.207 468.238 249.799 465.406 246.26 461.703C242.608 457.882 240.62 452.78 240.092 447.932L240.09 447.916L240.089 447.9L239.939 446.721C236.533 421.959 215.332 398.112 176.805 398.112C146.88 398.112 118.984 409.519 93.7812 420.659L93.6973 420.696L93.6143 420.736C90.9516 422.021 88.0483 423.491 85.1201 424.985C75.7792 429.719 65.9532 434.733 55.1543 437.074L55.1309 437.08L55.1074 437.085C51.5258 437.894 47.9877 438.255 44.7148 438.255C41.2332 438.255 38.246 437.838 35.6865 437.051C24.1304 433.094 16.2061 421.953 16.2061 410.307C16.2061 398.631 22.8579 390.783 32.6104 379.604L32.6113 379.604C34.0109 378.025 35.4983 376.348 37.0137 374.575C49.7342 360.602 65.0604 337.346 69.0273 303.383L69.0645 303.065V285.566Z" fill="#8BAAF1" stroke="url(#paint0_linear_1_786)" stroke-width="11"/>
                </g>
                <g xmlns="http://www.w3.org/2000/svg" id="eye-wrapper">
                    <path id="eye" d="M155.046 126.166C172.723 126.166 187.339 140.961 187.339 159.527C187.338 178.12 172.721 192.911 155.046 192.911C137.37 192.911 122.753 178.12 122.753 159.527C122.753 140.939 137.366 126.166 155.046 126.166Z" fill="#8BAAF1" stroke="url(#paint1_linear_1_786)" stroke-width="11"/>
                </g>
                <defs>
                <linearGradient id="paint0_linear_1_786" x1="176.793" y1="0" x2="176.793" y2="473.738" gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.1"/>
                <stop offset="1" stop-color="white" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="paint1_linear_1_786" x1="155.045" y1="120.666" x2="155.045" y2="198.412" gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.1"/>
                <stop offset="1" stop-color="white" stop-opacity="0"/>
                </linearGradient>
                </defs>
            </svg>
        </div>

        <div id="myPopup" class="popup">
            <div class="popup-content">
                <span id="closePopup" class="close">&times;</span>
                <div class="popup-body">
                    <?php if ($privacy_policy_text) {
                        echo wp_kses_post($privacy_policy_text);
                    } ?>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
