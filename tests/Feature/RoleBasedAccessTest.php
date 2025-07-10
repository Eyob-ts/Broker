<?php

use App\Data\Role;
use App\Models\User;

test('admin can access admin routes', function () {
    $admin = User::factory()->create(['role' => Role::ADMIN]);

    $response = $this->actingAs($admin)->get('/admin');

    $response->assertStatus(200);
});

test('editor cannot access admin routes', function () {
    $editor = User::factory()->create(['role' => Role::EDITOR]);

    $response = $this->actingAs($editor)->get('/admin');

    $response->assertStatus(403);
});

test('editor can access editor routes', function () {
    $editor = User::factory()->create(['role' => Role::EDITOR]);

    $response = $this->actingAs($editor)->get('/editor');

    $response->assertStatus(200);
});

test('admin can access editor routes', function () {
    $admin = User::factory()->create(['role' => Role::ADMIN]);

    $response = $this->actingAs($admin)->get('/editor');

    $response->assertStatus(200);
});

test('user role methods work correctly', function () {
    $admin = User::factory()->create(['role' => Role::ADMIN]);
    $editor = User::factory()->create(['role' => Role::EDITOR]);

    expect($admin->isAdmin())->toBeTrue();
    expect($admin->isEditor())->toBeFalse();
    expect($admin->isAdminOrEditor())->toBeTrue();

    expect($editor->isAdmin())->toBeFalse();
    expect($editor->isEditor())->toBeTrue();
    expect($editor->isAdminOrEditor())->toBeTrue();
});
