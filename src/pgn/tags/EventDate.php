<?php
/* 
 * Copyright (c) 2016 Geraldo B. Landre
 * 
 * See the file LICENSE for copying permission.
 */
namespace pgn\tags;

use utils\Parser;

/**
 * Description of EventDate:
 * This uses a date value, similar to the Date tag field, that gives the starting
 * date of the Event.
 * 
 * @see pgn_standard.txt
 * @author Geraldo
 */
class EventDate extends Date {

    public function getName() {
        $parsed = Parser::parseClassName(get_class());
        return $parsed['className'];
    }

}
