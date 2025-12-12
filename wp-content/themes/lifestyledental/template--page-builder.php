<?php

/**
 * Template Name: Page Builder
 * 
 * @package Lifestyle Dental
 * @author Lifestyle Dental
 */

get_header();

?>

<style>
    h1 {
        font-size: 48px;
    }

    h2 {
        font-size: 40px;
    }

    h3 {
        font-size: 32px;
    }

    h4 {
        font-size: 24px;
    }

    h1,
    h2,
    h3,
    h4,
    body {
        color: #000;
    }

    @media (max-width: 767px) {
        h1 {
            font-size: 32px;
        }

        h2 {
            font-size: 24px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 18px;
        }
    }

    img {
        max-width: 100%;
    }

    .btn.main-cta.orange {
        background-color: #ea5400;
        width: 350px;
        max-width: 100%;
        text-transform: none;
        margin-top: 32px;
    }

    .top-bar-1 {
        background-color: #E55425;
    }

    .page-template-template--page-builder .award-logos,
    .page-template-template--page-builder .footer_new {
        background-color: #fff;
        margin: 0 15px;
    }

    .page-template-template--page-builder .award-logos>.container {
        background-color: #f7f7f7;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .page-template-template--page-builder .footer_new>.container {
        background-color: #2f2f2f;
        border-radius: 20px 20px 0 0;
        padding-left: 20px;
        padding-right: 20px;
    }

    @media (min-width: 1200px) {
        .top-bar-1>.container {
            padding-left: 60px;
        }

        .core__header>.container {
            padding: 15px 60px 15px;
        }

        .page-template-template--page-builder .footer_new>.container {
            padding-left: 60px;
            padding-right: 60px;
        }

        .top-bar-1>.container,
        .core__header>.container,
        .page-template-template--page-builder .award-logos>.container,
        .page-template-template--page-builder .footer_new>.container {
            max-width: 1150px;
        }
    }

    .comp__treatment-journey {
        padding: 60px;
        margin-bottom: 50px;
    }

    .comp__treatment-journey .grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 45px;
        margin-top: 30px;
        position: relative;
        padding-left: 30px;
    }

    .comp__treatment-journey .grid:after {
        content: '';
        width: 100%;
        height: 40px;
        background-color: #FFE7E9;
        position: absolute;
        top: 40px;
        border-radius: 10px;
    }

    .comp__treatment-journey .timeline-block {
        font-weight: 300;
        display: flex;
        flex-direction: column;
        min-height: 250px;
        position: relative;
    }

    .comp__treatment-journey .timeline-block .timeline-header {
        margin-top: auto;
        position: relative;
        display: inline-block;
        margin-bottom: 15px;
    }

    .comp__treatment-journey .timeline-block .timeline-header:before {
        content: '';
        position: absolute;
        top: -45px;
        left: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 16px solid #fff;
        z-index: 1;
        transform: scale(1.8);

    }

    .comp__treatment-journey .timeline-block .timeline-header:after {
        content: '';
        position: absolute;
        top: -43px;
        left: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 16px solid #BB025F;
        z-index: 1;
    }

    .comp__treatment-journey .timeline-block:first-of-type .timeline-header::after {
        border-bottom: 16px solid #E55425;
    }

    .comp__treatment-journey .timeline-block:nth-of-type(3):before,
    .comp__treatment-journey .timeline-block:nth-of-type(3):after {
        content: '';
        height: 100%;
        width: 1px;
        border-right: 1px dashed #474747;
        position: absolute;
        z-index: 1;
        left: -25px;
    }

    .comp__treatment-journey .timeline-block:nth-of-type(3):after {
        left: unset;
        right: -10px;
    }

    @media (max-width: 1200px) {
        .comp__treatment-journey .grid:after {
            top: 60px;
        }

        .comp__treatment-journey .timeline-block {
            min-height: 320px;
        }
    }

    @media (max-width: 992px) {

        .comp__treatment-journey {
            padding: 40px 0px;
        }

        .comp__treatment-journey .grid {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 20px;
        }


        .comp__treatment-journey .grid:after {
            top: 0;
            height: 100%;
            width: 32px;
        }

        .comp__treatment-journey .timeline-block {
            min-height: unset;
            margin-left: 30px;
        }

        .comp__treatment-journey .timeline-block p {
            max-width: 216px;
        }

        .comp__treatment-journey .timeline-block .timeline-header:after {
            transform: rotate(90deg);
            top: 7px;
            left: -35px;
        }

        .comp__treatment-journey .timeline-block .timeline-header:before {
            transform: scale(1.8) rotate(90deg);
            top: 7px;
            left: -33px;
        }

        .comp__treatment-journey .timeline-block:nth-of-type(3):before,
        .comp__treatment-journey .timeline-block:nth-of-type(3):after {
            height: 1px;
            width: 222px;
            border-top: 1px dashed #474747;
            position: absolute;
            z-index: 1;
            left: -10px;
            top: 30px;
        }

        .comp__treatment-journey .timeline-block:nth-of-type(3):after {
            right: unset;
            top: unset;
            bottom: -53px;
        }
    }

    .comp__lead-team-member {
        border-radius: 20px;
        background-color: #FFE7E9;
        padding: 30px 60px;
        margin-bottom: 50px;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 50px;
        font-weight: 300;
        align-items: center;
    }

    .comp__lead-team-member>div {
        grid-column: span 2 / span 2;
    }

    .comp__lead-team-member img {
        border-radius: 20px;
    }

    .comp__team-members {
        padding: 30px 60px;
        margin-bottom: 30px;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 50px;
        font-weight: 300;
    }

    .comp__team-members>div {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .comp__team-members>div img {
        width: 250px;
        border-radius: 10px;
    }

    @media (max-width: 992px) {

        .comp__lead-team-member,
        .comp__team-members {
            padding: 30px;
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .comp__lead-team-member>div {
            grid-column: 1;
        }

        .comp__team-members>div img {
            width: 100px;
        }
    }

    .comp__hero-banner {
        background-color: #FFE7E9;
        border-radius: 20px;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 50px;
        padding: 30px 60px 0;
        margin-bottom: 30px;
    }

    .comp__hero-banner .hero-form {
        background-color: #E55425;
        padding: 30px;
        border-radius: 20px 20px 0 0;
        color: #fff;
    }

    .comp__hero-banner .hero-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .comp__hero-banner .hero-content h3 {
        color: #000;
        font-size: 20px;
    }

    .comp__hero-banner .hero-content h3 .fas {
        color: #BB025F;
    }

    .comp__hero-banner .hero-content h1 {
        color: #000;
        max-width: 450px;
        margin-bottom: 30px;
    }

    .comp__hero-banner .hero-content .wysiwyg {
        font-size: 20px;
        margin-bottom: 15px;
        color: #000;
    }

    .comp__usp-bar {
        background-color: #BB025F;
        color: #fff;
        display: flex;
        justify-content: space-between;
        border-radius: 20px;
        margin-bottom: 50px;
        padding: 12px 60px;
    }

    .comp__usp-bar p {
        margin: 0;
    }

    .comp__usp-bar p .fas {
        margin-right: 10px;
    }

    @media (min-width: 992px) and (max-width: 1200px) {
        .comp__usp-bar p {
            max-width: 150px;
            line-height: 1;
        }

        .comp__usp-bar p i {
            position: absolute;
            transform: translate(-30px, 6px);
        }
    }

    @media (max-width: 992px) {
        .comp__hero-banner {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            padding: 30px 30px 0;
            margin-top: 30px;
        }

        .comp__hero-banner .hero-form {
            border-radius: 20px;
            margin: 0 -30px;
        }

        @keyframes usp1 {
            0% {
                opacity: 0;
            }

            3% {
                opacity: 1;
            }

            23% {
                opacity: 1;
            }

            25% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes usp2 {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 0;
            }

            27% {
                opacity: 1;
            }

            48% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes usp3 {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 0;
            }

            52% {
                opacity: 1;
            }

            73% {
                opacity: 1;
            }

            75% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes usp4 {
            0% {
                opacity: 0;
            }

            75% {
                opacity: 0;
            }

            77% {
                opacity: 1;
            }

            98% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .comp__usp-bar {
            height: 48px;
        }

        .comp__usp-bar>p {
            animation-duration: 20s;
            width: 100%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            text-align: center;
        }

        .comp__usp-bar>p:nth-of-type(1) {
            animation-name: usp1;
            animation-iteration-count: infinite;
        }

        .comp__usp-bar>p:nth-of-type(2) {
            animation-name: usp2;
            animation-iteration-count: infinite;
        }

        .comp__usp-bar>p:nth-of-type(3) {
            animation-name: usp3;
            animation-iteration-count: infinite;
        }

        .comp__usp-bar>p:nth-of-type(4) {
            animation-name: usp4;
            animation-iteration-count: infinite;
        }
    }

    .comp__fullwidth-wysiwyg {
        border-radius: 20px;
        padding: 60px;
        margin-bottom: 30px;
    }

    @media (max-width: 992px) {

        .comp__fullwidth-wysiwyg {
            padding: 40px 30px;
        }
    }

    .comp__form-banner {
        border-radius: 20px;
        padding: 60px;
        margin-bottom: 50px;
        background-color: #0096AD;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 50px;
        color: #fff;
        font-weight: 300;
    }

    @media (max-width: 992px) {
        .comp__form-banner {
            padding: 40px 30px;
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }
    }

    .comp__feature-grid {
        background-color: #FFE7E9;
        border-radius: 20px;
        padding: 60px;
        margin-bottom: 50px;
        text-align: center;
    }

    .comp__feature-grid .grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 50px;
        margin-top: 30px;
        text-align: left;
    }

    .comp__feature-grid .grid .grid-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .comp__feature-grid .grid .grid-item img {
        max-width: 80px;
        margin-top: 15px;
        border-radius: 50%;
    }

    .comp__feature-grid .grid .grid-item p {
        max-width: 320px;
        font-weight: 300;
    }

    @media (max-width: 992px) {

        .comp__feature-grid {
            padding: 40px 30px;
        }

        .comp__feature-grid .grid {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 20px;
        }

        .comp__feature-grid .grid .grid-item img {
            max-width: 50px;
        }
    }

    .comp__clinic-info {
        font-weight: 300;
        padding: 0 60px;
    }

    .comp__clinic-info iframe {
        border-radius: 20px;
    }

    @media (max-width: 992px) {
        .comp__clinic-info {
            padding: 0 15px 15px !important;
        }

        .comp__clinic-info .col-lg-4 {
            padding: 0 30px;
            margin-bottom: 30px;
        }
    }

    .comp__before-and-after {
        background-color: #FFE7E9;
        border-radius: 20px;
        padding: 60px;
        margin-bottom: 30px;
    }

    .comp__before-and-after .grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 50px;
        margin-top: 30px;
    }

    .comp__before-and-after .image-wrap {
        background-color: #fff;
        border-radius: 20px;
        padding: 20px;
        text-align: center;
        font-weight: 600;
        font-size: 20px;
    }

    .comp__before-and-after .image-wrap.pink {
        background-color: #BB025F;
        color: #fff;
    }

    .comp__before-and-after .image-wrap p {
        margin: 10px 0 0 0;
    }

    @media (max-width: 992px) {

        .comp__before-and-after {
            padding: 40px 30px;
        }

        .comp__before-and-after .grid {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 20px;
        }
    }

    .comp__accordion-block {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 50px;
        padding: 30px 60px 0;
        margin-bottom: 50px;
    }

    .comp__accordion-block.fullwidth {
        display: block;
        background-color: #FFE7E9;
        padding: 60px 60px 30px;
        border-radius: 20px;
        text-align: center;
        margin-bottom: 50px;
    }

    .comp__accordion-block .accordion-image {
        background-color: #FFE7E9;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        height: fit-content;
    }

    .comp__accordion-block .accordion-tab {
        background-color: #FAFAFA;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        transition: all 0.2s ease;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-right: 40px;
    }

    .comp__accordion-block .accordion-tab:first-of-type {
        margin-top: 30px;
    }

    .comp__accordion-block.fullwidth .accordion-tab {
        border-radius: 0;
        background-color: transparent;
        border-bottom: 1px solid #494949;
        text-align: left;
        margin-bottom: 8px;
    }

    .comp__accordion-block.fullwidth .accordion-tab:last-of-type {
        border: none;
    }

    .comp__accordion-block.fullwidth .panel {
        background-color: transparent;
        text-align: left;
    }

    .comp__accordion-block .active,
    .comp__accordion-block .accordion-tab:hover {
        background-color: #FFE7E9;
    }

    .comp__accordion-block .accordion-tab:after {
        content: '';
        border-top: 2px solid #000;
        border-right: 2px solid #000;
        height: 8px;
        width: 8px;
        transform: rotate(135deg);
        transition: all 0.2s ease;
    }

    .comp__accordion-block .active:after {
        transform: rotate(315deg);
    }

    .comp__accordion-block .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    @media (max-width: 992px) {
        .comp__accordion-block {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            padding: 60px 15px 30px !important;
        }

        .comp__accordion-block:not(.fullwidth) {
            padding: 30px 0 !important;
            gap: 25px;
        }
    }
</style>

<?php

if (have_rows('page_builder')) {
    while (have_rows('page_builder')) {
        the_row();

        $template_path = sprintf('page-builder/%s.php', get_row_layout());

        if (file_exists(__DIR__ . '/' . $template_path)) {
            include $template_path;
        }
    }
}

?>

<script>
    var acc = document.getElementsByClassName("accordion-tab");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<?php

get_footer();

?>