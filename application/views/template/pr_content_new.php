<!DOCTYPE html>
<html>
<head>
    <title>Purchase Order</title>
    <style type="text/css">
        body {
            font-family: 'Calibri',sans-serif;
            font-size: 12px;
        }
        table{
            table-layout: fixed;
            border-collapse: collapse;
        }

        #main td{
            padding : 3px;
            border: none;
        }


    </style>
</head>
<body>
<table id="main" width="98%" style="border:1px solid white;">
    <thead>
    <tr>
        <td colspan="2" align="center">
            <h3 style="line-height: 50%"><strong><?php echo $company_info->company_name; ?></strong></h3>
            <p style="line-height: 50%"><?php echo $company_info->company_address; ?></p>
            <p style="line-height: 0%"><?php echo $company_info->landline.'/'.$company_info->mobile_no; ?></p><br />
        </td>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td style="border:1px solid white;" width="50%">


        </td>
        <td style="border:1px solid white;" width="50%">


        </td>
    </tr>
    <tr>
        <td width="100%" colspan="2" style="padding: 0px;">
            <table width="100%" style="margin: 0px;">
                <tr>
                    <td style="border:1px solid black;" width="12%">Stock No.</td>
                    <td style="border:1px solid black;" width="12%">Unit</td>
                    <td style="border:1px solid black;" width="40%">Description</td>
                    <td style="border:1px solid black;" width="12%">Qty</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="100%" colspan="2" style="padding: 0px;min-height: 200px;height: 200px;border-top: 1px solid white;" valign="top">

            <table width="100%" style="margin: -1px;">
                <?php foreach($pr_items as $item){ ?>
                    <tr>
                        <td valign="top" style="border:1px solid black;border-top: none;" width="12%"><?php echo $item->product_code; ?></td>
                        <td valign="top" style="border:1px solid black;border-top: none;" width="12%"><?php echo $item->unit_name; ?></td>
                        <td valign="top" style="border:1px solid black;border-top: none;" width="40%"><?php echo $item->product_desc; ?></td>
                        <td valign="top" align="right" style="border:1px solid black;border-top: none;" width="12%"><?php echo number_format($item->pr_qty,0); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>

    </tbody>
</table>
</body>



<script>/*window.print();*/</script>
</html>