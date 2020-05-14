<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>

<ul id="error_message_box" class="error_message_box"></ul>

<?php echo form_open('/items/generate_barcodes' , array('id'=>'barcode_form', 'class'=>'form-horizontal')) ?>
<fieldset id="bulk_item_basic_info">
    <div class="form-group form-group-sm">
        <?php echo form_label($this->lang->line('items_barcode_quantity'), 'quantity', array('class'=>'required control-label col-xs-4')); ?>
        <div class='col-xs-7'>
            <?php echo form_input(array(
                    'name'=>'barcode_quantity',
                    'id'=>'barcode_quantity',
                    'class'=>'form-control input-sm')
            );?>
            <?php echo form_input(array(
                    'name' => 'item_ids',
                    'type' => 'hidden',
                    'id' => 'item_ids',
                    'value' => ''
            ));
            ?>
        </div>
    </div>
</fieldset>
<script>
$(document).ready(function()
{
    $('#item_ids').val(table_support.selected_ids().join(':'));

    $('#barcode_form').validate($.extend({

        errorLabelContainer: '#error_message_box',

        rules:
            {
                barcode_quantity:
                    {
                        number: true,
                        required: true
                    }
            },

        messages:
            {
                barcode_quantity:
                    {
                        number: "Barcode Quantity must be a number"
                    }
            }
    }, form_support.error));

});
</script>
<?php echo form_close(); ?>
