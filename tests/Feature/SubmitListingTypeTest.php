<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Validation\ValidationException;

class SubmitListingTypeTest extends TestCase
{

    use RefreshDatabase;

    public function test()
    {
      $response = $this->post('/submit', [
        'name' => 'John Doe',
        'slug' => 'about-us',
        'description' => '',
      ]);

      // $this->get('/submit')->assertStatus(400);

      $this->assertDatabaseHas('listing_types', [
        'slug' => 'about-us',
      ]);
    }

    // /** @test */
    // public function guest_can_submit_a_new_link() {
    //   $response = $this->post('/submit', [
    //     'name' => 'Example Title',
    //     'slug' => 'a',
    //     'description' => 'Example description.',
    //   ]);
    //
    //   $this->assertDatabaseHas('listing_types', [
    //     'name' => 'Example Title',
    //   ]);
    //
    //   $response
    //     ->assertStatus(302)
    //     ->assertHeader('Location', url('/'));
    //
    //   $this
    //     ->get('/')
    //     ->assertSee('Example Title');
    // }
    //
    // /** @test */
    // public function link_is_not_created_if_validation_fails() {
    //   $response = $this->post('/submit');
    //   $response->assertSessionHasErrors([
    //     'name',
    //     'slug',
    //     'description',
    //   ]);
    // }
    //
    // /** @test */
    // public function link_is_not_created_with_an_invalid_url() {
    //   $this->withoutExceptionHandling();
    //
    //   $cases = [
    //     'about-us',
    //     'about_us',
    //     'about.us',
    //   ];
    //
    //   foreach ($cases as $case) {
    //     try {
    //       $response = $this->post('/submit', [
    //         'name' => 'Example Title',
    //         'slug' => $case,
    //         'description' => 'Example description',
    //       ]);
    //     } catch (ValidationException $e) {
    //       $this->assertEquals(
    //         'The slug format is invalid.',
    //         $e->validator->errors()->first('slug')
    //       );
    //       continue;
    //     }
    //
    //     $this->fail("The slug $case passed validation when it should have failed.");
    //   }
    // }
    //
    // /** @test */
    // public function max_length_fails_when_too_long() {
    //   $this->withoutExceptionHandling();
    //
    //   $name = str_repeat('a', 200);
    //   $description = str_repeat('a', 200);
    //   $slug = 'http://';
    //   $slug .= str_repeat('a', 200 - strlen($slug));
    //
    //   try {
    //     $this->post('/submit', compact('name', 'slug', 'description'));
    //   } catch(ValidationException $e) {
    //     $this->assertEquals(
    //       'The title may not be greater than 255 characters.',
    //       $e->validator->errors()->first('name')
    //     );
    //
    //     $this->assertEquals(
    //       'The url may not be greater than 255 characters.',
    //       $e->validator->errors()->first('slug')
    //     );
    //
    //     $this->assertEquals(
    //       'The description may not be greater than 255 characters.',
    //       $e->validator->errors()->first('description')
    //     );
    //
    //     return;
    //   }
    //
    //   $this->fail('Max length should trigger a ValidationException');
    // }
    //
    // /** @test */
    // public function max_length_succeeds_when_under_max() {
    //   $slug = 'http://';
    //   $slug .= str_repeat('a', 256 - strlen($slug));
    //
    //   $data = [
    //     'name' => str_repeat('a', 256),
    //     'slug' => $slug,
    //     'description' => str_repeat('a', 256),
    //   ];
    //
    //   $this->post('/submit', $data);
    //
    //   $this->assertDatabaseHas('listing_types', $data);
    // }
}
