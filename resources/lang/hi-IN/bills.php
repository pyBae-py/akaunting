<?php

return [

    'bill_number'           => 'बिल संख्या',
    'bill_date'             => 'बिल तारीख',
    'total_price'           => 'कुल राशि',
    'due_date'              => 'नियत तारीख',
    'order_number'          => 'ऑर्डर संख्या',
    'bill_from'             => 'से बिल',

    'quantity'              => 'मात्रा',
    'price'                 => 'मूल्य',
    'sub_total'             => 'पूर्ण योग',
    'discount'              => 'छूट',
    'tax_total'             => 'कर राशि',
    'total'                 => 'कुल',

    'item_name'             => 'वस्तु का नाम|वस्तुओं के नाम',

    'show_discount'         => ':discount% छूट',
    'add_discount'          => 'छूट जोड़ें',
    'discount_desc'         => 'पूर्ण योग का',

    'payment_due'           => 'भुगतान राशि',
    'amount_due'            => 'देय राशि',
    'paid'                  => 'भुगतान किया है|',
    'histories'             => 'इतिहास',
    'payments'              => 'भुगतान',
    'add_payment'           => 'भुगतान जोड़ें',
    'mark_received'         => 'प्राप्त किए हुए में मार्क करे',
    'download_pdf'          => 'डाउनलोड PDF',
    'send_mail'             => 'ईमेल भेजें',
    'create_bill'           => 'बिल बनाएं',
    'receive_bill'          => 'बिल प्राप्त करें',
    'make_payment'          => 'भुगतान करो',

    'statuses' => [
        'draft'             => 'ड्राफ्ट',
        'received'          => 'स्वीकार किया',
        'partial'           => 'आंशिक',
        'paid'              => 'भुगतान किया',
    ],

    'messages' => [
        'received'          => 'बिल को सफलतापूर्वक प्राप्त किया गया!',
        'draft'             => 'यह एक <b>ड्राफ्ट</b> बिल है और इसे प्राप्त होने के बाद चार्ट पर प्रतिबिंबित किया जाएगा।',

        'status' => [
            'created'       => ':date को बनाया गया',
            'receive' => [
                'draft'     => 'नहीं भेजा गया',
                'received'  => ':date को प्राप्त किया गया',
            ],
            'paid' => [
                'await'     => 'भुगतान का इंतजार',
            ],
        ],
    ],

];
