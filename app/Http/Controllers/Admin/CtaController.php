<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCtumRequest;
use App\Http\Requests\StoreCtumRequest;
use App\Http\Requests\UpdateCtumRequest;
use App\Models\Ctum;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CtaController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('ctum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cta = Ctum::with(['media'])->get();

        return view('admin.cta.index', compact('cta'));
    }

    public function create()
    {
        abort_if(Gate::denies('ctum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cta.create');
    }

    public function store(StoreCtumRequest $request)
    {
        $ctum = Ctum::create($request->all());

        if ($request->input('image', false)) {
            $ctum->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ctum->id]);
        }

        return redirect()->route('admin.cta.index');
    }

    public function edit(Ctum $ctum)
    {
        abort_if(Gate::denies('ctum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cta.edit', compact('ctum'));
    }

    public function update(UpdateCtumRequest $request, Ctum $ctum)
    {
        $ctum->update($request->all());

        if ($request->input('image', false)) {
            if (! $ctum->image || $request->input('image') !== $ctum->image->file_name) {
                if ($ctum->image) {
                    $ctum->image->delete();
                }
                $ctum->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($ctum->image) {
            $ctum->image->delete();
        }

        return redirect()->route('admin.cta.index');
    }

    public function show(Ctum $ctum)
    {
        abort_if(Gate::denies('ctum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cta.show', compact('ctum'));
    }

    public function destroy(Ctum $ctum)
    {
        abort_if(Gate::denies('ctum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ctum->delete();

        return back();
    }

    public function massDestroy(MassDestroyCtumRequest $request)
    {
        $cta = Ctum::find(request('ids'));

        foreach ($cta as $ctum) {
            $ctum->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('ctum_create') && Gate::denies('ctum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Ctum();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
