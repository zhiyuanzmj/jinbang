<?php
add_hook('AfterCronJob', 1, function() {
	try {
		$UnPaidinvoice = \WHMCS\Database\Capsule::table('mod_renewal')->where('status', 'UnPaid')->get();

		foreach ($UnPaidinvoice as $invoiceID) {
			$invoice = \WHMCS\Database\Capsule::table('tblinvoices')->where('id', $invoiceID->invoiceid)->where('status', 'Paid')->first();

			if (!empty($invoice)) {
				$ReNewtype = \WHMCS\Database\Capsule::table('mod_renewal')->where('invoiceid', $invoiceID->invoiceid)->first()->type;
				$order = \WHMCS\Database\Capsule::table('tblhosting')->where('id', $invoiceID->serviceid)->where('userid', $invoiceID->userid)->first()->nextduedate;
				$endtime = date('Y-m-d H:i:s', strtotime($order . ' +' . $ReNewtype . 'month'));
				\WHMCS\Database\Capsule::table('mod_renewal')->where('invoiceid', $invoice->id)->update(array('status' => 'Paid', 'datepaid' => date('Y-m-d H:i:s')));
				$result = \WHMCS\Database\Capsule::table('tblhosting')->where('id', $invoiceID->serviceid)->where('userid', $invoiceID->userid)->update(array('nextduedate' => $endtime, 'nextinvoicedate' => $endtime));

				if (!empty($result)) {
					logActivity('Service ID: ' . $invoiceID->serviceid . ' - ReNew Successful!');
				}
			}
		}
	}
	catch (Exception $e) {
		logActivity($e);
	}
});
add_hook('InvoicePaid', 1, function($vars) {
	try {
		$UnPaidinvoice = \WHMCS\Database\Capsule::table('mod_renewal')->where('status', 'UnPaid')->get();

		foreach ($UnPaidinvoice as $invoiceID) {
			$invoice = \WHMCS\Database\Capsule::table('tblinvoices')->where('id', $invoiceID->invoiceid)->where('status', 'Paid')->first();

			if (!empty($invoice)) {
				$ReNewtype = \WHMCS\Database\Capsule::table('mod_renewal')->where('invoiceid', $invoiceID->invoiceid)->first()->type;
				$order = \WHMCS\Database\Capsule::table('tblhosting')->where('id', $invoiceID->serviceid)->where('userid', $invoiceID->userid)->first()->nextduedate;
				$endtime = date('Y-m-d H:i:s', strtotime($order . ' +' . $ReNewtype . 'month'));
				\WHMCS\Database\Capsule::table('mod_renewal')->where('invoiceid', $invoice->id)->update(array('status' => 'Paid', 'datepaid' => date('Y-m-d H:i:s')));
				$result = \WHMCS\Database\Capsule::table('tblhosting')->where('id', $invoiceID->serviceid)->where('userid', $invoiceID->userid)->update(array('nextduedate' => $endtime, 'nextinvoicedate' => $endtime));

				if (!empty($result)) {
					logActivity('Service ID: ' . $invoiceID->serviceid . ' - ReNew Successful!');
				}
			}
		}
	}
	catch (Exception $e) {
		logActivity($e);
	}
});

?>
