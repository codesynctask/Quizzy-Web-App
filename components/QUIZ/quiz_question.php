<form class="question_form" action="./verify_answer.php" method="post">
    <?php echo "<h1>Q." . $question_num . " " . $question . "</h1>" ?>

    <div class="option">
        <div class="option_list">
            <input type="radio" required name="<?php echo $question_index; ?>" value="<?php echo $total_answer_option[0]; ?>" id="A" />
            <label for="A"><?php echo $total_answer_option[0]; ?></label>
        </div>
        <div class="option_list">
            <input type="radio" required name="<?php echo $question_index; ?>" value="<?php echo $total_answer_option[1]; ?>" id="B" />
            <label for="B"><?php echo $total_answer_option[1]; ?></label>
        </div>
        <div class="option_list">
            <input type="radio" required name="<?php echo $question_index; ?>" value="<?php echo $total_answer_option[2]; ?>" id="C" />
            <label for="C"><?php echo $total_answer_option[2]; ?></label>
        </div>
        <div class="option_list">
            <input type="radio" required name="<?php echo $question_index; ?>" value="<?php echo $total_answer_option[3]; ?>" id="D" />
            <label for="D"><?php echo $total_answer_option[3]; ?></label>
        </div>
    </div>

    <div class="qus_btn">
        <button type="submit">Check</button>
    </div>
</form>
