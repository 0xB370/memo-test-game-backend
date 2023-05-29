<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use CreatesApplication;
use App\GraphQL\Mutations\RemoveImageFromMemoTest;
use App\Models\Image;
use App\Models\MemoTest;
use Tests\TestCase;




class RemoveImageFromMemoTestMutationTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testRemoveImageFromMemoTestMutation()
    {
        // Create a MemoTest and an Image to perform the test
        $memoTest = MemoTest::factory()->create();
        $image = Image::factory()->create(['memo_test_id' => $memoTest->id]);

        // Perform the GraphQL query to remove the Image from the MemoTest
        $mutation = new RemoveImageFromMemoTest();
        $response = $mutation->__invoke(null, [
            'memoTestId' => $memoTest->id,
            'imageId' => $image->id,
        ]);

        // Verify that the Image has been successfully removed from the MemoTest
        $updatedMemoTest = MemoTest::find($memoTest->id);
        $this->assertNull(Image::find($image->id));
        $this->assertEquals($memoTest->id, $response->id);
    }


}
