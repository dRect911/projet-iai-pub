<?php
function banner($title, $type=''){

    echo '<div id="hero" class="hero overlay '. $type .'">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>' .$title . '</h1>
                    <p class="welcome"></p>

                </div>
                <!-- /.hero-text -->
            </div>
            <!-- /.hero-content -->
        </div>';

}
