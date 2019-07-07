<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function addPurchase(Request $request)
    {
        $cat = new Purchase();
        $cat->purchaseName = $request->purchaseName;
        $cat->purchaseInfo = $request->purchaseInfo;
        $cat->lcSender = $request->lcSender;
        $cat->lcReceiver = $request->lcReceiver;
        $cat->lcOpen = $request->lcOpen;
        $cat->lcClose = $request->lcClose;
        $cat->underInvoice = $request->underInvoice;
        $cat->shippingCharge = $request->shippingCharge;
        $cat->nbrVat = $request->nbrVat;
        $cat->cndfCost = $request->cndfCost;
        $cat->transportCost = $request->transportCost;
        $cat->labourCost = $request->labourCost;
        $cat->purchaseQuantity = $request->purchaseQuantity;
        $cat->TotalCost = ($request->lcOpen + $request->lcClose + $request->underInvoice + $request->shippingCharge + $request->nbrVat + $request->cndfCos + $request->transportCost + $request->labourCost);
        $cat->CostPerUnit = ($cat->TotalCost / $request->purchaseQuantity);
        $cat->save();
        return 'OK';
    }
}
