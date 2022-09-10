<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CouponModel;

class Coupon extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;

    public function index()
    {
        $modelCoupon = new CouponModel();
        $data = $modelCoupon->findAll();
        if (!$data) return $this->failNotFound("Data tidak ditemukan");
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modelCoupon = new CouponModel();
        $data = $modelCoupon->find(['id' => $id]);
        if (!$data) return $this->failNotFound("Data tidak ditemukan");
        return $this->respond($data[0]);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $json = $this->request->getJSON();

        $data = [
            'title' => $json->title,
            'code_coupon' => $json->code_coupon
        ];

        $model = new CouponModel();
        $coupon = $model->insert($data);
        if(!$coupon) return $this->fail("Data gagal disimpan",400);
        return $this->respondCreated($coupon);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $json = $this->request->getJSON();

        $data = [
            'title' => $json->title,
            'code_coupon' => $json->code_coupon
        ];

        $model = new CouponModel();
        $check_id = $model->find(['id' => $id]);
        if(!$check_id) return $this->fail("Data tidak ditemukan",404);
        $coupon = $model->update($id,$data);
        if(!$coupon) return $this->fail("Data gagal diupdate",400);
        return $this->respond($coupon);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new CouponModel();
        $check_id = $model->find(['id' => $id]);
        if(!$check_id) return $this->fail("Data tidak ditemukan",404);
        $coupon = $model->delete($id);
        if(!$coupon) return $this->fail("Data gagal dihapus",400);
        return $this->respondDeleted(['id' => $id,"pesan"=>"Data berhasil dihapus"]);
    }
}
