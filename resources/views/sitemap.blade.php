<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @if(isset($types))
        @foreach ($types as $type)
            <url>
                <loc>{{ route("type_service_component", ['name' => $type->Service->name_service, 'name_type' => $type->name_type]) }}</loc>
                <lastmod>{{ $type->created_at->tz("GST")->toAtomString() }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
    @endif

    @if(isset($services))
        @foreach ($services as $service)
            <url>
                <loc>{{ route("service_component", ['name' => $service->name_service]) }}</loc>
                <lastmod>{{ $service->created_at->tz("GST")->toAtomString() }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
    @endif

    @if(isset($blogs))
        @foreach ($blogs as $blog)
            <url>
                <loc>{{ route("id_blog", ['id_blog' => $blog->id]) }}</loc>
                <lastmod>{{ $blog->created_at->tz("GST")->toAtomString() }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
    @endif
</urlset>
