<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyHeaderLinkRequest;
use App\Http\Requests\StoreHeaderLinkRequest;
use App\Http\Requests\UpdateHeaderLinkRequest;
use App\Models\HeaderLink;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class HeaderLinkController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('header_link_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $headerLinks = HeaderLink::with(['media'])->get();

        return view('admin.headerLinks.index', compact('headerLinks'));
    }

    public function create()
    {
        abort_if(Gate::denies('header_link_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.headerLinks.create');
    }

    public function store(StoreHeaderLinkRequest $request)
    {
        $headerLink = HeaderLink::create($request->all());

        if ($request->input('image', false)) {
            $headerLink->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $headerLink->id]);
        }

        return redirect()->route('admin.header-links.index');
    }

    public function edit(HeaderLink $headerLink)
    {
        abort_if(Gate::denies('header_link_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.headerLinks.edit', compact('headerLink'));
    }

    public function update(UpdateHeaderLinkRequest $request, HeaderLink $headerLink)
    {
        $headerLink->update($request->all());

        if ($request->input('image', false)) {
            if (! $headerLink->image || $request->input('image') !== $headerLink->image->file_name) {
                if ($headerLink->image) {
                    $headerLink->image->delete();
                }
                $headerLink->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($headerLink->image) {
            $headerLink->image->delete();
        }

        return redirect()->route('admin.header-links.index');
    }

    public function show(HeaderLink $headerLink)
    {
        abort_if(Gate::denies('header_link_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.headerLinks.show', compact('headerLink'));
    }

    public function destroy(HeaderLink $headerLink)
    {
        abort_if(Gate::denies('header_link_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $headerLink->delete();

        return back();
    }

    public function massDestroy(MassDestroyHeaderLinkRequest $request)
    {
        $headerLinks = HeaderLink::find(request('ids'));

        foreach ($headerLinks as $headerLink) {
            $headerLink->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('header_link_create') && Gate::denies('header_link_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new HeaderLink();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
