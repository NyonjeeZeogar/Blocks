var registerBlockType = wp.blocks.registerBlockType;

registerBlockType("first-block/firstblock", {
    edit: function () {
        return "Edit";
    },
    save: function () {
        return "Save";
    },
});