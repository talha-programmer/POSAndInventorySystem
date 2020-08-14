Introduction
------------

Open Source Point of Sale is a web based point of sale system. The repository of the original software is [here](https://github.com/opensourcepos/opensourcepos).
The main features are:
* Stock management (Items and Kits with extensible list of Attributes)
* VAT, GST, customer and multi tiers taxation
* Sale register with transactions logging
* Quotation and invoicing
* Expenses logging
* Cashup
* Receipt and invoice printing and/or emailing
* Barcode generation and printing
* Suppliers and Customers database
* Multiuser with permission control
* Reporting on sales, orders, expenses, inventory status
* Receivings
* Giftcard
* Rewards
* Restaurant tables
* Messaging (SMS)
* Multilanguage
* Selectable Boostrap (Bootswatch) based UI theme
* Mailchimp integration
* reCAPTCHA to protect login page from brute force attacks
* GDPR ready

Changes Made
------------

I have included the following features in the system:
* Calculate total discount on all products. 
  Details:
  * Add total discount value in all products' discount in case of PERCENT discount.
  * Add total discount value in one product's discount in case of CURRENCY discount.
  * Total discount will be applied automatically when new products added to cart.
  * It will be possible to remove/change discount value of single/multiple products after applying total discount.
  * Included in both sales and receiving mode.
  
* Barcode qunatity option for barcode generation. Multiple barcodes of a single product can be generated with this option.

* New category for items: 'Pack Items'. Details are:
  * Prices and quantity are added for packs but updated for the single pieces in the inventory. 
  * Included pack items in sales and receivings. That is, items can be received or sold in packs. For example: pack of medicine.
  
Following features are removed:
* Removed feature to add items by invoice number in return sales mode because it was causing error while adding items in return mode, complete sale was added by invoice number due to the invoice number same as item id. It was a bug found in original application.
* Removed 'Low Sell Quantity' from inventory reports. It was the feature of the original application's pack items (Displaying quantity of single pieces of pack items in reports). The original application's 'Pack Item' category only included this feature. As I have included my own category of 'Pack Items' with other features, this feature was not working correctly with other features I have included for 'Pack Items'.
