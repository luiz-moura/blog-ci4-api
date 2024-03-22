<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuPageModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'menu_pages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'object';
    protected $useSoftDelete = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'menu',
        'parent',
        'title',
        'type',
        'sequence',
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
        'menu' => 'required|integer',
        'parent' => 'permit_empty|integer',
        'title' => 'required|string|max_length[135]',
        'type' => 'required|alpha',
        'sequence' => 'required|integer',
        'status' => 'required|alpha',
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
