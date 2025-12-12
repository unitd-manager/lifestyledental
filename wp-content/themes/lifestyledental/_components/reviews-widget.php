<style>
    .comp__reviews-widget {
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #000;
        padding: 10px 40px;
        border-radius: 50px;
        font-weight: 400;
        width: 450px;
        max-width: 100%;
    }

    .comp__reviews-widget img {
        width: 40px;
    }

    .comp__reviews-widget p {
        margin: 0;
    }

    .comp__reviews-widget .review-stars {
        display: flex;
        gap: 5px;
        justify-content: center;
        color: #FFBB00;
    }


    @media (max-width: 1200px) {
        .comp__reviews-widget {
            padding: 15px;
            font-size: 14px;
        }

        .comp__reviews-widget img {
            width: 20px;
        }
    }

    @media (max-width: 390px) {
        .comp__reviews-widget {
            justify-content: center;
        }
        
        .comp__reviews-widget > p:first-of-type {
            display: none;
        }
    }
</style>


<div class="comp__reviews-widget">
    <p>
        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2022/07/reviews_icon.png" alt="google icon">
        Google Reviews
    </p>
    <div>
        <div class="review-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p class="review-scores">

        </p>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if ti-widget is present
        var tiWidget = document.querySelector('.ti-widget');

        if (tiWidget) {
            // Extract rating and review count using regular expressions
            var tiRatingText = tiWidget.querySelector('.ti-rating-text');
            var ratingMatch = tiRatingText && tiRatingText.innerText.match(/([\d.]+) of 5/);
            var reviewCountMatch = tiRatingText && tiRatingText.innerText.match(/based on (\d+) reviews/);

            var rating = ratingMatch ? ratingMatch[1] : '';
            var reviewCount = reviewCountMatch ? reviewCountMatch[1] : '';

            // Populate review-scores in all comp__reviews-widget elements
            var reviewScoresElements = document.querySelectorAll('.comp__reviews-widget .review-scores');

            if (reviewScoresElements.length > 0) {
                reviewScoresElements.forEach(function(element) {
                    element.textContent = rating + ' Stars | ' + reviewCount + ' Reviews';
                });
            }
        }
    });
</script>