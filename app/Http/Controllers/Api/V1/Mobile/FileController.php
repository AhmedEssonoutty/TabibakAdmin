<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\FileRequest;
use App\Http\Resources\FileResource;
use App\Models\File;
use App\Repositories\Contracts\FileContract;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group files
 */
class FileController extends BaseApiController
{
    /**
     * UserController constructor.
     * @param FileContract $contract
     */
    public function __construct(FileContract $contract)
    {
        parent::__construct($contract, FileResource::class);
    }

    /**
     * Upload new file
     *
     * @bodyParam file required The uploaded file.
     * @bodyParam type string required The file type. (meeting attachment -> request_meeting_attachment)
     * <p>Available types:</p>
     * <p><code>user_avatar => To upload user avatar</code></p>
     *
     * @param FileRequest $request
     * @return JsonResponse
     *
     * @unauthenticated
     */
    public function store(FileRequest $request): JsonResponse
    {
        try {
            $file = $this->contract->create($request->validated());
            return $this->respondWithModel($file);
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * Delete File
     *
     * @param File $file
     * @return JsonResponse
     *
     * @unauthenticated
     */
    public function destroy(File $file): JsonResponse
    {
        try{
            $this->contract->remove($file);
            return $this->respondWithSuccess(__('Deleted Successfully'));
        }catch(Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

}
