<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function homePage(){
        $whyChooseUs = [
            ["title" => "High Quality Prints",
             "description" => "Studio-quality lighting and professional DSLR cameras ensure your guests look their best."
            ],

            ["title" => "Custom Props",
             "description" => "A huge variety of fun, quirky, and themed props tailored for your specific event."
            ],

            ["title" => "Instant Sharing",
             "description" => "Share photos instantly via email or QR code direct from the photobooth screen."
            ]
        ];
        return view('index', compact('whyChooseUs'));
    }

    public function servicesOption(){
        $packages = [
            ["name" => "Basic Snap",
             "price" => "Rp 1.500.000",
             "duration" => "/2 hours",
             "features" => ["Unlimited Prints (2x6)",
                            "Standard Backdrop",
                            "Fun Props Set",
                            "Online Gallery",
                            ],
             "button" => "Choose Basic"
                        
            ],

            ["name" => "Premium Joy",
             "price" => "Rp 2.500.000",
             "duration" => "/4 hours",
             "features" => ["Unlimited Premium Prints (4x6)",
                            "Custom Premium Backdrop",
                            "Themed High-End Props",
                            "Boomerang & GIF Creation",
                            "Scrapbook Station"
                            ],
             "button" => "Choose Premium"
                        
            ],

            ["name" => "Wedding VIP",
             "price" => "Rp 4.000.000",
             "duration" => "/6 hours",
             "features" => ["Everything in Premium",
                            "360 Video Booth Included",
                            "Custom Photo Template Design",
                            "Instant Social Media Sharing Kiosk",
                            "Idle Time (1 hour free)"
                            ],
             "button" => "Choose VIP"
                        
            ]
        ];
        return view('services', compact('packages'));
    }
}
