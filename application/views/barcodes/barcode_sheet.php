<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <base href="<?php echo base_url();?>" />
    <title><?php echo $this->lang->line('items_generate_barcodes'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo 'dist/bootswatch/' . (empty($this->config->item('theme')) ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css' ?>"/>
    <link rel="stylesheet" type="text/css" href="dist/jquery-ui/jquery-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="dist/opensourcepos.min.css?rel=397f582d3d"/>
    <link rel="stylesheet" rev="stylesheet" href="css/barcode_font.css" />

    <script type="text/javascript" src="dist/opensourcepos.min.js?rel=d08916b862"></script>

    <style type="text/css">
        table table{
            margin-top: <?php echo $barcode_config['barcode_page_cellspacing']; ?>px;
            margin-left: <?php echo $barcode_config['barcode_page_cellspacing']; ?>px;
        }
    </style>

</head>

<body class=<?php echo "font_".$this->barcode_lib->get_font_name($barcode_config['barcode_font']); ?>
      style="font-size:<?php echo $barcode_config['barcode_font_size']; ?>px">

    <div class="print_hide" style="margin: 20px 0px 0 <?php echo $barcode_config['barcode_page_cellspacing']; ?>px">
        <button class="btn btn-info" onclick="window.print()">
            <span class="glyphicon glyphicon-print">&nbsp</span><?php echo $this->lang->line('common_print'); ?>
        </button>
    </div>


    <table cellspacing=<?php echo $barcode_config['barcode_page_cellspacing']; ?> width='<?php echo $barcode_config['barcode_page_width']."%"; ?>' >
        <tr>
			<?php
			$count = 0;
			if(!isset($barcode_quantity))
                $barcode_quantity = 1;
			foreach($items as $item)
			{
			    for($i=0; $i<$barcode_quantity; $i++)
			    {
                    if ($count % $barcode_config['barcode_num_in_row'] == 0 and $count != 0)
                    {
                        echo '</tr><tr>';
                    }
                    echo '<td>' . $this->barcode_lib->display_barcode($item, $barcode_config) . '</td>';
                    ++$count;
                }
			}
			?>
		</tr>
	</table>
</body>

</html>


