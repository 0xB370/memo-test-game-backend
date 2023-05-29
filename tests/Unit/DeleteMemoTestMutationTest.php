<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;
use App\GraphQL\Mutations\DeleteMemoTest;
use App\Models\MemoTest;


class DeleteMemoTestMutationTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testDeleteMemoTestMutation()
    {
        // Create a MemoTest to perform the test
        $memoTest = MemoTest::factory()->create();

        // Perform the GraphQL query to remove the MemoTest
        $mutation = new DeleteMemoTest();
        $response = $mutation->__invoke(null, ['id' => $memoTest->id]);

        // Verify that the MemoTest has been successfully removed
        $this->assertNull(MemoTest::find($memoTest->id));
        $this->assertEquals($memoTest->id, $response->id);
    }



}
