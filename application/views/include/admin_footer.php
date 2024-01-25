<?php
$CI = &get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>
<footer class="main-footer">
    <strong>
        <?php if (isset($Web_settings[0]['footer_text'])) {
    echo $Web_settings[0]['footer_text'];
}?>
    </strong>
</footer>
<script>
$(function() {

    $(".datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        changeYear: true,
        changeMonth: true,
    })
})
</script>