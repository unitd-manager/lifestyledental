<style>
    @media (min-width: 1200px) {
        .popup-finance-form {
            display: none !important;
        }
    }
</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');

    .offer-popup-wrap {
        position: fixed;
        background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 999;
    }

    .offer-popup-wrap .offer-popup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 50px 20px;
        width: 600px;
        max-width: 90%;
        border-radius: 20px;
        position: relative;
        color: #fff;
    }

    .offer-popup-wrap .offer-popup h2 {
        font-family: "Satisfy", system-ui;
        text-transform: capitalize;
        color: #fff;
        font-size: 38px;
    }

    .offer-popup-wrap .offer-popup .popup-body {
        font-size: 32px;
        margin-bottom: 0;
    }

    .offer-popup-wrap .offer-popup .popup-btn {
        padding: 8px 32px;
        background: linear-gradient(90deg, #ce4783 1%, #e95617 99%);
        font-size: 16px;
        margin-top: -5px;
        color: #fff;
        border-radius: 50px;
        z-index: 1;
        margin-bottom: 12px;
    }

    .offer-popup-wrap .offer-popup #close-offer-popup {
        position: absolute;
        top: 20px;
        right: 28px;
        color: #cdcdcd;
        cursor: pointer;
    }

    .offer-popup-wrap img.bg-image {
        position: absolute;
        z-index: -1;
        width: 700px;
        margin-left: 63px;
    }

    .offer-popup-wrap img.bg-image.mobile {
        display: none;
    }

    @media (max-width: 767px) {
        .offer-popup-wrap .offer-popup {
            padding: 0;
            width: 365px;
            min-height: 465px;
        }

        .offer-popup-wrap .offer-popup h2 {
            font-size: 32px;
            margin-top: 20px;
        }

        .offer-popup-wrap .offer-popup .popup-btn {
            margin-top: 110px;
        }

        .offer-popup-wrap img.bg-image.mobile {
            display: block;
            width: 400px;
            margin-left: 0;
        }

        .offer-popup-wrap img.bg-image.desktop {
            display: none;
        }
    }

    @media (max-width: 390px) {
        .offer-popup-wrap .offer-popup {
            width: 277px;
            min-height: 343px;
        }

        .offer-popup-wrap .offer-popup h2 {
            font-size: 28px;
            margin-top: 20px;
        }

        .offer-popup-wrap .offer-popup .popup-body {
            font-size: 28px;
        }

        .offer-popup-wrap .offer-popup .popup-btn {
            margin-top: 60px;
        }

        .offer-popup-wrap img.bg-image.mobile {
            width: 300px;
        }
    }
</style>
<div class="offer-popup-wrap">
    <div class="offer-popup">
        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2024/11/Lifestyle_xmas_pop_up-1.webp" alt="xmas offer" class="bg-image desktop">
        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2024/11/Lifestyle_xmas_pop_up-background-1.webp" alt="xmas offer" class="bg-image mobile">
        <h2>
            Make This <br> Christmas Sparkle!
        </h2>
        <p class="popup-body">
            <strong>Save £200 </strong>
        </p>
        <p>
            On Fixed Braces
        </p>
        <a href="tel:01772717316" class="popup-btn">
            <span class="d-none d-md-inline">CALL US NOW ON <i class="fas fa-phone ml-2 fa-flip-horizontal"></i> 01772 717 316</span>

            <span class="d-md-none">CALL NOW <i class="fas fa-arrow-right ml-2"></i></span>
        </a>
        <p>
            Offer Ends 31st Decemeber
        </p>
        <span id="close-offer-popup"><i class="fas fa-times"></i></span>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // uncomment for debuggin & development, recomment when pushing live
        // sessionStorage.removeItem('offerPopUpClosed');

        const popupWrap = document.querySelector('.offer-popup-wrap');
        const offerPopup = document.querySelector('.offer-popup');
        const closeButton = document.getElementById('close-offer-popup');

        // Function to hide the popup and set sessionStorage
        function hidePopup() {
            popupWrap.style.display = 'none';
            sessionStorage.setItem('offerPopUpClosed', 'true');
        }

        // Close button click event listener
        closeButton.addEventListener('click', hidePopup);

        // Overlay click event listener
        popupWrap.addEventListener('click', function(event) {
            if (!offerPopup.contains(event.target)) {
                hidePopup();
            }
        });

        // Check if popup has been closed during this session
        if (sessionStorage.getItem('offerPopUpClosed') !== 'true') {
            // Show the popup after confirming it hasn't been closed in this session
            setTimeout(() => {
                popupWrap.style.display = 'flex';
            }, 1000); // Delay
        }
    });
</script>