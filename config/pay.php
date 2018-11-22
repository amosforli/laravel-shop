<?php
return [
    'alipay' => [
        'app_id'         => '2016092000553949',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuTVwOHFZ9ZcLF4b90hpdaQqKvTNCOcQFuPgeUjDaFuBFzRgCc8SalPkUnUpd9BIoWPoxFP5dUPRAUOtustdsQu94rxfw6nbugxlxFxCFPNK3uoxG0URMSgpkLZ46+kZd8a5t62m5v9OcHTxN3zlC6tyqaAMwARvn1TrlR9o14hrUbHC9euEa3NbFCUkRvTiW0Ws9SrvwYiRSRTLX9YW3TzI9tSVNPn1ElrpPwlYtIkpyr1Ay4VsJSo/Xo613awC/cfQCIWd/2nNnMoBcSxfDr2w0cdx1zC4doMLHBGH9JM2B9rAvMgALYnGzMmcy0lS/VDNmqoNtCgPtyjQXX/h8pQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA5mVa0uzqQHFsdIuEhCzqMVXkOWHHcuD2CvzJu4eHgk8eKbGy2SQOpHtLp+AliFpwus7fNve28O01aZEisIkXsJv/NZTI61PgCLntDzVc56j24rCmnmAQ+CqDKXYnIWLihqG2UcxkM/S3a1CZKgxAlI6idQam6Q1iZG14HScoRoNjoSZeBPOy8jon6OZizr/HnKZ7zIRY4zEHhxhHjvsQ/sosaVyJAaPulTKUam0xYg8YR2QfMFQtS5qD5LpVq2SlmhJ//LQ5kLZWdtmlfZDA5PfiMw289Bi6Id7n87rgPG67iQMTsM/DKIRT39U77+Il/x5H9hYPE+1jlSOSxj5UNwIDAQABAoIBADz64pklP7Mi0jPeoYpiYPIB69AMQz/yruylj7dk3cbtrewXLmEum/mI8LNULlrypResnYPs+Ky3/AUe9vGGt5B1GY1S/gLbRlbI7yexVg+ytvW1D8SnZJZqmiClNyItDAvaTWlFEdh2kv2CbaelaopnXjRfOFpCwqIWH06ICK7woyL32sFtTC+T32JORWvWV3871uVlwCsWuTAjySPIueruBj+1rYr/w5XpQOOGtcumENRF9Qj4Xe76U4D8dcjsuswqwhkuuSCcBRjQpj71Lh5km/klVdjSXhUrpASNQ3Hu/hJ1B/X9s7EoxZaAjTMSSm8K2YV4QYMRx3BcQ4oNBDECgYEA9Uxxg/AxhRY0WZ+Goa9Uaq5K5ByHXuhL0l0ZZi2stkY2zLByRoRoHqCn45fCRgwOLOLC+1F4ABWfQ+P7Oiei6C38KFBVR3gPE7FcN+ox/wcDJiFKGclQyJxgmRgHe4uZcjZhVooTCx/GljF9suilSNdK7hR59yEiMe+JO7cIE7MCgYEA8HJ5cD5+nuVwDWutgYMhhYXoRKNf+4g1hOBdupJdeK+LW4FdiMJIrE26u38cexPyY+BDnH4NsU8CCCM5B8bmbvuLwbp3w8tNW1EyeA9ZfMY2sxICs0fwyA6aeqiO/8E88xywKp1IMN0UL1Tu5vxxLNTdOx62hrSrz1qELKOVy20CgYEAkfwDlqztG7JiR3BMNI9e4vqFcYqU+eOvtCtaAVhvcC8LT/g2mkcUnB2qrSVVJlDoYsg1mFIc45f6p/HXQv3x0tIDPo7IofcOqf6kzlYfmRI4SooHSp9n52xBhPsrANjM4o8AkPstaDJqAlrD3yTbsSUH3/bpuyzJ6AQRnStJsEcCgYAGhuT7AgdH4uyGwLyF/nxDdp4WduTdHBZv0/NXZC+7XfCHfFyAoN1+J+IAwvOP97ulsGnFbrqKbJ2egO5EYsbQjm19xcUIgJVJ/EtFbQ090NedRsjh+vrzQ0o4OCkhkipIYyf5ECnsgaPRoRmXFZUw5VpYB35m67KaP1fFKm+fhQKBgBC3QRQkbYCZArRsiPXfh7SCBUxvg3HLtcQoTc2RDxgQwq0nFhWdUWp7asZp/FO/bedOrJtH85ULak5CyNaAass8ne8xOPHMYlu6Lbyt6zXemDleRsVVNtESoWxtYHPXJ8b8QQpdaxP/kqMeyMCFHXbulrXWiYGTh867jBIHC3hb',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
