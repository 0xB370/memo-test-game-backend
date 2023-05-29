<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;
use App\GraphQL\Mutations\CreateMemoTest;

class CreateMemoTestMutationTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testCreateMemoTestMutation()
    {
        // Define the input data for the mutation
        $input = [
            'name' => 'Memo Test created by mutation',
            'imageUrls' => [
                'https://example.com/image1.jpg',
                'https://example.com/image2.jpg',
            ],
        ];


        // Run the mutation
        $result = app(CreateMemoTest::class)->__invoke(null, ['input' => $input]);

        // Check that a new MemoTest has been created in the database
        $this->assertDatabaseHas('memo_tests', [
            'name' => $input['name'],
        ]);

        // Verify that the images associated with the MemoTest have been created
        $this->assertCount(count($input['imageUrls']), $result->images);

        foreach ($result->images as $image) {
            $this->assertDatabaseHas('images', [
                'url' => $image->url,
                'memo_test_id' => $result->id,
            ]);
        }
    }


}
