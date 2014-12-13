$(document).ready(function()
{
    responsiveGrid_Update();
});

$(window).resize(function()
{
    responsiveGrid_Update();
});

function responsiveGrid_Update()
{
    $(".responsive-grid").each(function()
    {
        responsiveGrid_UpdateGrid($(this));
    });
}

function responsiveGrid_UpdateGrid(grid)
{
    var minColumnWidth = parseInt(grid.attr("data-min-col-width"));
    var currentWidth = grid.width();
    
    var desiredColumnWidth;
    
    /* if there's only space for one column, items fill the entire width */
    if (minColumnWidth * 2 > currentWidth) {
        desiredColumnWidth = 100;
    }
    
    /* otherwise find out how many columns and use that */
    else
    {
        var desiredNumberOfColumns = Math.floor(currentWidth / minColumnWidth);
    
        desiredColumnWidth = 1 / desiredNumberOfColumns * 100;
    }
    
    
    
    /* we use percent for the width since pixels have issues with the items becoming too large and pushing one down to the next line */
    grid.children().css("width", desiredColumnWidth + "%").css("display", "block").css("float", "left").css("clear", "none");
    
    /* this handles when items in above row are uneven heights */
    grid.children().each(function(index)
    {
        if (index == desiredNumberOfColumns) {
            $(this).css("clear", "left");
        }
    });
}

//not used anymore
function maxWidthCode(grid) {
    var maxColumnWidth = parseInt(grid.attr("data-max-col-width"));
    var currentWidth = grid.width();
    
    var desiredNumberOfColumns = Math.ceil(currentWidth / maxColumnWidth);
    
    var desiredColumnWidth = currentWidth / desiredNumberOfColumns;
    
    desiredColumnWidth = 1 / desiredNumberOfColumns * 100;
    
    /* we use percent for the width since pixels have issues with the items becoming too large and pushing one down to the next line */
    grid.children().css("width", desiredColumnWidth + "%").css("display", "block").css("float", "left").css("clear", "none");
    
    /* this handles when items in above row are uneven heights */
    grid.children().each(function(index)
    {
        if (index == desiredNumberOfColumns) {
            $(this).css("clear", "left");
        }
    });
}