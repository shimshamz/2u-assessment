
<section style="background-color: #f42684;">

    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
            
            <?php if (get_field('school_name')) { ?>
            <h1 style="color: #eda018"><?php get_field('school_name'); ?></h1>
            <?php } ?>

            <?php if (get_field('school_description')) { ?>
            <p style="color: #2f2f2f"><?php get_field('school_description'); ?></p>
            <?php } ?>

            <form action="#">
                <label for="username">Username</label>
                <input type="text" id="username">

                <label for="work-experience">Work Experience</label>
                <select id="work-experience">
                    <option value="1-2-years">1 - 2 Years</option>
                    <option value="3-4-years">3 - 4 Years</option>
                    <option value="5-plus-years">5+ Years</option>
                </select>

                <input type="submit" value="<?php the_field('button_text'); ?>" style="color: #eda018">
            </form>

       <?php } // end while
    } // end if
    ?>

    

</section>