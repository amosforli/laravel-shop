<?php
return [
    'alipay' => [
        'app_id'         => '2016092000553949',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuTVwOHFZ9ZcLF4b90hpdaQqKvTNCOcQFuPgeUjDaFuBFzRgCc8SalPkUnUpd9BIoWPoxFP5dUPRAUOtustdsQu94rxfw6nbugxlxFxCFPNK3uoxG0URMSgpkLZ46+kZd8a5t62m5v9OcHTxN3zlC6tyqaAMwARvn1TrlR9o14hrUbHC9euEa3NbFCUkRvTiW0Ws9SrvwYiRSRTLX9YW3TzI9tSVNPn1ElrpPwlYtIkpyr1Ay4VsJSo/Xo613awC/cfQCIWd/2nNnMoBcSxfDr2w0cdx1zC4doMLHBGH9JM2B9rAvMgALYnGzMmcy0lS/VDNmqoNtCgPtyjQXX/h8pQIDAQAB
',
        'private_key'    => 'MIIEpAIBAAKCAQEAqpIsX+1/A/j6TeoUu2J/u2NuGBfRzCTU3Knp6oiU2zHYq49UXZ2adA4FH8zYFkMSC/VXKV2e5SJIMOfu0pcqfGI5Q+NgnAzs5xiq8XTKynkKJbk6ismRurY9/s8OWtaC2JJ/u90eWdAyGfSCAWNXsfnbWz1LwwArZ1ROLMjJAqIO+nb8tzdV3/k1t4O2JNzzaFqxMg0bWAAuqJ066UL/DXG7s00u1wL8IUW8Vo4azxVzmvAdbhQX7egYFRqyDuAzux+iR8S+Oo6+l59uyimdRWJNGiPC0ShmL5/ziVXgWQunSXQ95vOU2W0Vxcoub5Xi2x2AAIc3XpAgRxdLlmrxQwIDAQABAoIBAGDTt7MA6/CCXvzp27j/0ki6yd2NcAA2DEvzfKExxWak5j2FkLvP4sTszIXfz+7bRhxZuo/14GRsUJTKpK0ROQIA9EcQhWAwii8ptqh4x0Gm8la1zoDIqhxWpdzHB3wTd5WfnDk17avIXxiSz1YgYcDbeGVT53Ub3Ie8uN/9XvZJwSD4k9yYR2JoXT55gcqz4y3jDFvlMZyHk86LVqmYZ/0jDZbiK6D67f4P4/mJRsytguSGlF2WI4dZj0YFL/h0gP2kqTQrbRmO+AJCtfhfVAjLJU4ZKFhf7lp1dqfwXar1OqbO29/Sgpw6ujeWfA+86qba5TXbOoLN2h0gzDvk3JECgYEA3NayC74sblgsOYJqQ1klGM6QtiKQUwTTJdz4vPPuWZFHvNuxUWzpxQHIbEOdmadCJgivNPQ+fBzXsTAW355AA7ZVcRTNz5zid4oAHwPQgrRAaqoTUTtWkOB7dyz05OeuQ1HujO/6GoeqDR4AiR+nSUMZh9j9IxRlFW0C7+Gh8hsCgYEAxbqV+LvMm/+B2GKbNGjhG3iV9ttDMMhsPEzXoaT+GRW5TfSWS2Uj5SQPNP5gdzSp3FdqlMk5z7fJ+Aq6OJ0rz2t+XOAAO8uQH2/PxGcxeOuuLVLkTEddl3Hdu5wZKMfVkNv+eoJnqbY19cAtNHIhrt102rt3t8BnmqXRU4iSr/kCgYEAzYNrK+xtsr6RYW+Rbl1+XWiWWTkvMGMUEG9kd4tWK7o8lW+pw0nk/vaays3d04lI0NZSHqiRobTBsV48WxwNHKdJOjQPF/867d3aIQLOv2P5cooV8gmTlL2jiJOoz4EftfyAUF5fVOMdiJl8DCAN8OrlzntLj6LCMz9AdXZ33DMCgYAGJ6CzdWURFgr8qVUbdIhNSpuga4LT6ek0l0+/AFvIfBygiJSFFEjhwRWYGLL4AvOmoDH5H6plBNuMlQjm6j2K31W3nmFjexqpX9mfy3aGxQ9O6d2hYjdPl4PHazx9QHstXyu0tIp1he54D9tYXpUd1Fbm2B8J4TtYXQD/EKlAQQKBgQC3VjCxVy6vHiouR9mXJzFQg3eSpvfp9Jibxjjsmc55+pSzPFQogEu4Goi/MpjiODqvaddrvOgz6+je3P0N1cTMkw6sOAZ7ZyNmZnrvrwwcJ2xTlrkITK5vQcbOmOka1nZzBRpo0a1Sd5ERNZrFN2WL4uwtI0whpqwgmwGQUkzuiw==',
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
