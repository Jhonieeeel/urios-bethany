<?php

namespace App\Enums;

enum ResidentStatus: string {
    case NoCaseFiled = 'No case filed';
    case Terminated = 'Terminated';
    case OnGoing = 'On-going';
    case AtLarge = 'At large';
    case Withdrawn = 'Withdrawn';
    case Dismissed = 'Dismissed';
}
