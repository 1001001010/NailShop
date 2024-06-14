$("#toggler").click(() => {
    $("#menu").toggleClass("max-md:top-0 max-md:-translate-y-full")
    $("#menu").toggleClass("max-md:top-[calc(100%+1px)]")
    $("#overlay").toggleClass("hidden")
})

$("#overlay").click(() => {
    $("#menu").addClass("max-md:top-0 max-md:-translate-y-full")
    $("#menu").removeClass("max-md:top-[calc(100%+1px)]")
    $("#overlay").addClass("hidden")
})