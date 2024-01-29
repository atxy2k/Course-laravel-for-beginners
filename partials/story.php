<?php 

class Story {

    private string $title;
    private string $description;
    private bool $active;
    private string $id;

    public function __construct(string $id, string $title, string $description, bool $active)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->active = $active;
    }

    public function printHeader(){
        return vsprintf('<button class="nav-link %s" id="nav-%s" data-bs-toggle="tab" data-bs-target="#%s"
        type="button" role="tab" aria-controls="%s" aria-selected="true">%s</button>', [
            $this->active ? 'active' : '',
            $this->id,
            $this->id,
            $this->id,
            $this->title
        ]);
    }

    public function printBody(){
        return vsprintf('<div class="tab-pane fade show %s" id="%s" role="tabpanel" aria-labelledby="nav-%s">%s</div>',[
            $this->active ? 'active' : '',
            $this->id,
            $this->id,
            $this->description
        ]);
    }

}

$stories = [
    new Story('who-tab','Who we Are', "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.
    There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.", true),
    
    new Story('nav-vision','Our Vision', "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.
    There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.", false),

    new Story('nav-history','Our History', "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.
    There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.", false),
];