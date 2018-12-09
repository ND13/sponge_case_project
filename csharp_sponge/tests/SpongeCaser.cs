using System;
using Xunit;
using SpongeCase;

namespace tests
{
    public class SpongeCaserTest
    {
        [Fact]
        public void SpongeCaseTransformTest()
        {
            Assert.Equal("hElLoWoRlD", SpongeCaser.ConvertToSpongeCase("HelloWorld"));
            Assert.Equal("hElLo WoRlD", SpongeCaser.ConvertToSpongeCase("hello World"));
            Assert.Equal(" hElLo WoRlD ", SpongeCaser.ConvertToSpongeCase(" Hello World "));

            //More Special Characters Test
            Assert.Equal("[hElLo WoRlD]", SpongeCaser.ConvertToSpongeCase("[Hello World]"));
            Assert.Equal("====bBbB====", SpongeCaser.ConvertToSpongeCase("====bbbb===="));

            //Test of starting with a capital letter by using an optional parameter
            Assert.Equal("HeLlO wOrLd", SpongeCaser.ConvertToSpongeCase("hello World", true));
            Assert.Equal("HeLlO wOrLd", SpongeCaser.ConvertToSpongeCase("Hello World", true));
        }
    }
}
