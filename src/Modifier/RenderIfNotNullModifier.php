<?php

namespace Fabstract\Component\Serializer\Modifier;

class RenderIfNotNullModifier extends ModifierBase
{
    /**
     * @param mixed $value
     * @param array $selected_render_tag_list
     * @return void
     */
    public function apply($value, $selected_render_tag_list = [])
    {
        $this->setShouldRender($value !== null);
    }
}
