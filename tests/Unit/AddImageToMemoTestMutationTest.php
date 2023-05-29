<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Factories\MemoTestFactory;
use App\GraphQL\Mutations\AddImageToMemoTest;

class AddImageToMemoTestMutationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the AddImageToMemoTest mutation.
     *
     * @return void
     */
    public function testAddImageToMemoTestMutation()
    {
        // Create a MemoTest to perform the test
        $memoTest = MemoTestFactory::new()->create();


        // Define the input data for the mutation
        $input = [
            'memoTestId' => $memoTest->id,
            'imageUrl' => 'https://example.com/image.jpg',
        ];

        // Perform the mutation
        app(AddImageToMemoTest::class)->__invoke(null, $input);


        // Verify that a new image associated with the MemoTest has been created
        $this->assertDatabaseHas('images', [
            'url' => $input['imageUrl'],
            'memo_test_id' => $input['memoTestId'],
        ]);

    }
}
