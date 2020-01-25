<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Audiotest extends TestCase
{

    public function test_notes_list()
    {
        // Having
		Note::create(['note'] => 'Mi first note');
		Note::create(['note'] => 'second note');
		
		// When
		$this->visit('notes')
			// Then
			->see('Msadas first note')
			->see('second note');
    }
}
