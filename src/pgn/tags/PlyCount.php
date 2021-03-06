<?php
/* 
 * Copyright (c) 2016 Geraldo B. Landre
 * 
 * See the file LICENSE for copying permission.
 */
namespace pgn\tags;

use utils\Parser;

/**
 * Description of PlyCount:
 * This tag takes a single integer that gives the number of ply (moves) in the
 * game.
 * @see pgn_standard.txt
 * @author Geraldo
 */
class PlyCount extends Board {

    /**
     * @assert () == 'PlyCount'
     * @return string
     */
    public function getName() {
        $parsed = Parser::parseClassName(get_class());
        return $parsed['className'];
    }

}
