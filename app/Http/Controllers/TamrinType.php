<?php
namespace App\Http\Controllers;

enum TamrinType: int
{
    case ISTIMA = 1;
    case KHIWAR = 2;
    case MUHADASA = 3;
    case QIROAH = 4;
    case KITABAH = 5;
    case MUFRODAT = 6;
    case KALAM = 7;
}
