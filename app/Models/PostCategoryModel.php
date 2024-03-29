<?php

namespace App\Models;

use CodeIgniter\Model;

class PostCategoryModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'post_categories';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'object';
    protected $useSoftDelete = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'parent',
        'image',
        'name',
        'description',
        'slug',
        'status',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'parent' => 'permit_empty|integer',
        'image' => 'permit_empty|integer',
        'name' => 'required|string|max_length[45]',
        'description' => 'permit_empty|string|max_length[90]',
        'slug' => 'required|alpha_dash|is_unique[post_categories.slug,id,{id}]|max_length[135]',
        'status' => 'permit_empty|alpha',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
