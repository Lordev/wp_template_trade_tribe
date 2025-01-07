<?php
$btn_prev_id = 'btn-prev' . '-' . $parent_field;
$btn_next_id = 'btn-next' . '-' . $parent_field;
?>

<div class="">
    <!-- <img src="http://localhost/wp-content/uploads/2024/12/tribal-circle.png" alt="tribal circle" class="animation-spin zn-1"> -->
    <div class="">
        <button class="slider-button bg-transparent border-0" type="button" title="left arrow" id=<?php echo $btn_prev_id ?>>
            <svg width="109" height="108" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor">
                <path d="M48.2322 55.7678L73.4645 81L68 86.4645L35.5355 54L68 21.5355L73.4645 27L48.2322 52.2322L46.4645 54L48.2322 55.7678Z" stroke="black" stroke-width="5" />
            </svg>
        </button>
        <button class="slider-button bg-transparent border-0" type="button" title="right arrow" id=<?php echo $btn_next_id ?>>
            <svg width="109" height="108" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M60.7678 52.2322L35.5355 27L41 21.5355L73.4645 54L41 86.4645L35.5355 81L60.7678 55.7678L62.5355 54L60.7678 52.2322Z" stroke="black" stroke-width="5" />
            </svg>
        </button>
    </div>
</div>