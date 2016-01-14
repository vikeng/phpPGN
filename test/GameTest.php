<?php

namespace pgn;

use pgn\exceptions\InvalidGameFormatException;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-11 at 12:02:26.
 */
class GameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Game
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Game;
        echo __CLASS__ . '::' . $this->getName() . "\n";
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert (NULL) throws InvalidGameFormatException.
     *
     * @covers pgn\Game::parse
     * @expectedException pgn\exceptions\InvalidGameFormatException
     */
    public function testParse() {
        $this->object->parse(NULL);
    }

    /**
     * Generated from @assert (123) throws InvalidGameFormatException.
     *
     * @covers pgn\Game::parse
     * @expectedException pgn\exceptions\InvalidGameFormatException
     */
    public function testParse2() {
        $this->object->parse(123);
    }

    /**
     * Generated from @assert (NULL) throws InvalidGameFormatException.
     *
     * @covers pgn\Game::parse
     */
    public function testParse3() {
        try {
            $this->object->parse(NULL);
        } catch (InvalidGameFormatException $exc) {
            $expected = "[pgn\Game] invalid game format (it's not a valid string): ";
            $this->assertEquals(
                    $expected, $exc->getMessage()
            );
            echo $exc->getTraceAsString();
        }
    }

    /**
     * @covers pgn\Game::parse
     */
    public function testParse4() {
        try {
            $this->object->parse(123);
            $this->fail();
        } catch (InvalidGameFormatException $exc) {
            $expected = "[pgn\Game] invalid game format (it's not a valid string): 123";
            $this->assertEquals(
                    $expected, $exc->getMessage()
            );
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Less than 7 tags
     *
     * @covers pgn\Game::parse
     */
    public function testParse6tags() {
        $unparsedGame = <<<EOD
[Event "Candidates Match quarterfinal3"]
[Site "Vancouver"]
[Date "1971.05.16"]
[Round "1"]
[White "Taimanov, Mark E"]
[Black "Fischer, Robert James"]

1. d4 Nf6 2. c4 g6 3. Nc3 Bg7 4. e4 d6 5. Nf3 O-O 6. Be2 e5 7. O-O Nc6 8. d5
Ne7 9. Bd2 Ne8 10. Rc1 f5 11. exf5 gxf5 12. Ng5 h6 13. Ne6 Bxe6 14. dxe6 Qc8
15. Qb3 c6 16. Bh5 Qxe6 17. Qxb7 Nf6 18. Be2 Rfb8 19. Qa6 Rxb2 20. Rfd1 e4
21. Qa3 Rb7 22. Bf4 d5 23. cxd5 cxd5 24. Nb5 Ng6 25. Nd4 Qd7 26. Qe3 Kh7 27. h3
Rf8 28. Ba6 Rb6 29. Rc7 (29. Bb5 $1 Rxb5 30. Rc7 Qe8 31. Rxg7+ Kxg7 32. Bxh6+
Kh7 33. Bxf8 Nxf8 34. Nxb5 Qxb5 35. Qg5 Qc6 36. Qxf5+ Kg7 $11) 29... Qa4 $1
30. Rxg7+ Kxg7 31. Bxh6+ Kf7 $2 (31... Kh7 $1 32. Be2 Rf7) 32. Be2 Rfb8 33. Nxf5
Rb1 34. Rxb1 Rxb1+ 35. Kh2 Qd7 36. Nd4 $2 (36. Ng3 $1 {Kasparov}) 36... Qd6+
37. g3 Qb4 $1 38. Nc6 Qb6 39. Nxa7 Qxe3 40. fxe3 Re1 41. Bg4 Nxg4+ 42. hxg4 Ne5
0-1
EOD;
        $expected = "[pgn\Game] invalid game format (it doesn't have correct fields): " . $unparsedGame;

        try {
            $this->object->parse($unparsedGame);
            $this->fail();
        } catch (InvalidGameFormatException $ex) {
            $this->assertEquals(
                    $expected
                    , $ex->getMessage()
            );
        }
    }

    /**
     * STR --> OK
     * @covers pgn\Game::parse
     */
    public function testParse7tags() {
        $unparsedGame = <<<EOD
[Event "Candidates Match quarterfinal3"]
[Site "Vancouver"]
[Date "1971.05.16"]
[Round "1"]
[White "Taimanov, Mark E"]
[Black "Fischer, Robert James"]
[Result "0-1"]

1. d4 Nf6 2. c4 g6 3. Nc3 Bg7 4. e4 d6 5. Nf3 O-O 6. Be2 e5 7. O-O Nc6 8. d5
Ne7 9. Bd2 Ne8 10. Rc1 f5 11. exf5 gxf5 12. Ng5 h6 13. Ne6 Bxe6 14. dxe6 Qc8
15. Qb3 c6 16. Bh5 Qxe6 17. Qxb7 Nf6 18. Be2 Rfb8 19. Qa6 Rxb2 20. Rfd1 e4
21. Qa3 Rb7 22. Bf4 d5 23. cxd5 cxd5 24. Nb5 Ng6 25. Nd4 Qd7 26. Qe3 Kh7 27. h3
Rf8 28. Ba6 Rb6 29. Rc7 (29. Bb5 $1 Rxb5 30. Rc7 Qe8 31. Rxg7+ Kxg7 32. Bxh6+
Kh7 33. Bxf8 Nxf8 34. Nxb5 Qxb5 35. Qg5 Qc6 36. Qxf5+ Kg7 $11) 29... Qa4 $1
30. Rxg7+ Kxg7 31. Bxh6+ Kf7 $2 (31... Kh7 $1 32. Be2 Rf7) 32. Be2 Rfb8 33. Nxf5
Rb1 34. Rxb1 Rxb1+ 35. Kh2 Qd7 36. Nd4 $2 (36. Ng3 $1 {Kasparov}) 36... Qd6+
37. g3 Qb4 $1 38. Nc6 Qb6 39. Nxa7 Qxe3 40. fxe3 Re1 41. Bg4 Nxg4+ 42. hxg4 Ne5
0-1
EOD;
        $this->object->parse($unparsedGame);
    }

    /**
     * SetUp without FEN --> X
     * @covers pgn\Game::parse
     */
    public function test_parseSetUpAndFEN1() {
        $unparsedGame = <<<EOD
[Event "Black to play"]
[Site "?"]
[Date "????.??.??"]
[Round "?"]
[White "?"]
[Black "?"]
[Result "*"]
[SetUp "1"]

*

EOD;

        $expected = "[pgn\Game] invalid game format (missing SetUp or FEN): " . $unparsedGame;
        try {
            $this->object->parse($unparsedGame);
            $this->fail();
        } catch (InvalidGameFormatException $ex) {
            $this->assertEquals(
                    $expected,
                    $ex->getMessage()
            );
        }
    }

    /**
     * SetUp=0 without FEN --> OK
     * @covers pgn\Game::parse
     */
    public function test_parseSetUpAndFEN2() {
        $unparsedGame = <<<EOD
[Event "Black to play"]
[Site "?"]
[Date "????.??.??"]
[Round "?"]
[White "?"]
[Black "?"]
[Result "*"]
[SetUp "0"]

*

EOD;

        $this->object->parse($unparsedGame);
    }

    /**
     * FEN without SetUp --> X
     * @covers pgn\Game::parse
     */
    public function test_parseSetUpAndFEN3() {
        $unparsedGame = <<<EOD
[Event "Brancas Jogam"]
[Site "?"]
[Date "????.??.??"]
[Round "?"]
[White "Geraldo"]
[Black "Rybka 2.2 64 bit"]
[Result "*"]
[WhiteElo "2400"]
[BlackElo "2400"]
[Time "00:12:55"]
[TimeControl "60"]
[FEN "8/8/8/8/Pp2k3/1P6/4K3/8 w - - 0 1"]

*

EOD;
        $expected = "[pgn\Game] invalid game format (missing SetUp or FEN): " . $unparsedGame;
        try {
            $this->object->parse($unparsedGame);
            $this->fail();
        } catch (InvalidGameFormatException $ex) {
            $this->assertTrue(
                    $expected ===
                    $ex->getMessage()
            );
        }
    }

    /**
     * SetUp and FEN --> OK
     * @covers pgn\Game::parse
     */
    public function test_parseSetUpAndFEN4() {
        $unparsedGame = <<<EOD
[Event "Brancas Jogam"]
[Site "?"]
[Date "????.??.??"]
[Round "?"]
[White "Geraldo"]
[Black "Rybka 2.2 64 bit"]
[Result "*"]
[WhiteElo "2400"]
[BlackElo "2400"]
[Time "00:12:55"]
[TimeControl "60"]
[SetUp "1"]
[FEN "8/8/8/8/Pp2k3/1P6/4K3/8 w - - 0 1"]

*

EOD;

        $this->object->parse($unparsedGame);
    }

    /**
     * No SetUp No FEN --> OK
     * @covers pgn\Game::parse
     */
    public function test_parseSetUpAndFEN5() {
        $unparsedGame = <<<EOD
[Event "Brancas Jogam"]
[Site "?"]
[Date "????.??.??"]
[Round "?"]
[White "Geraldo"]
[Black "Rybka 2.2 64 bit"]
[Result "*"]
[WhiteElo "2400"]
[BlackElo "2400"]
[Time "00:12:55"]
[TimeControl "60"]

*

EOD;

        $this->object->parse($unparsedGame);
    }

    /**
     * @covers pgn\Game::__toString
     * @todo   Implement test__toString().
     */
    public function test__toString() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers pgn\Game::toString
     * @todo   Implement testToString().
     */
    public function testToString() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers pgn\Game::getTag
     * @todo   Implement testGetTag().
     */
    public function testGetTag() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers pgn\Game::addTag
     * @todo   Implement testAddTag().
     */
    public function testAddTag() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
